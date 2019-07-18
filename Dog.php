<?php

require_once "Logger.php";

class Dog implements \JsonSerializable {

    private $id;

    private $name;

    private $sex;

    private $uuid;

    private $father;

    private $mother;

    private $tree;

    private $wrightIndex;

    private $logger;

    public function __construct($id, $name, $sex, $uuid, Dog $father = NULL, Dog $mother = NULL, $wrightIndex = NULL) {
        $this->id = $id;
        $this->name = $name;
        $this->sex = $sex;
        $this->uuid = $uuid;
        if( ($father instanceof Dog) && ($father->getSex() == Sex::MALE)) {
            $this->father = $father;
        }
        if( ($mother instanceof Dog) && ($mother->getSex() == Sex::FEMALE)) {
            $this->mother = $mother;
        }
        $this->wrightIndex = $wrightIndex;

        $time = date('d-M-Y-H_i_s');
        //Using timestamp in file name, e.g. log-02-06-2016.txt
        $this->logger = new Logger('log-' . $time . '.txt');
        $this->logger->setLevel(Logger::DEBUG);
        $this->logger->debug("new Dog(" . $id . ",'" . $name . "', '" . $sex . "', '" . $uuid
                                        . "', "
                                        . ($father==NULL?"NULL":"new Dog(" . $father->getId() .",'" . $father->getName() . "','" . $father->getSex() . "','" . $father->getUuid() . "')") . " , "
                                        . ($mother==NULL?"NULL":"new Dog(" . $mother->getId() .",'" . $mother->getName() . "','" . $mother->getSex() . "','" . $mother->getUuid() . "')") . " , "
                                        . ($wrightIndex==NULL?"NULL":$wrightIndex) . ");");
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function isMale() {
        return $this->sex == Sex::MALE;
    }

    /**
     * @return mixed
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @param mixed $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @return Dog
     */
    public function getFather()
    {
        return $this->father;
    }

    /**
     * @param Dog $father
     */
    public function setFather(Dog $father)
    {
        $this->father = $father;
    }

    /**
     * @return Dog
     */
    public function getMother()
    {
        return $this->mother;
    }

    /**
     * @param Dog $mother
     */
    public function setMother(Dog $mother)
    {
        $this->mother = $mother;
    }

    /**
     * @return mixed
     */
    public function getWrightIndex()
    {
        return $this->wrightIndex;
    }

    /**
     * @param mixed $wrightIndex
     */
    public function setWrightIndex($wrightIndex)
    {
        $this->wrightIndex = $wrightIndex;
    }

    /**
     * @return mixed
     */
    public function getTree()
    {
        return $this->tree;
    }

    /**
     * @param mixed $tree
     */
    public function setTree($tree)
    {
        $this->tree = $tree;
    }


    public function jsonSerialize() {
        $vars = get_object_vars($this);
        return $vars;
    }


    public function equals(\Dog $subject) {
        return $this->getId() == $subject->getId();
    }

    public function __toString() {
        return serialize($this);
    }

    public function walk($arrIndex = "", Dog $ancestor = NULL)
    {
        if ($this->tree == null) {
            $this->tree = [];
        }

        if($ancestor != null) {
            if($ancestor->getFather() != null) {
                // f - male , father
                $this->walk($arrIndex."f", $ancestor->getFather());
                $this->tree[$arrIndex."f"] = $ancestor->getFather();
            }
            if($ancestor->getMother() != null) {
                // m - female , mother
                $this->walk($arrIndex."m", $ancestor->getMother());
                $this->tree[$arrIndex."m"] = $ancestor->getMother();
            }
        }
    }

    public function calculateWrightIndex($debug = false) {
        $this->logger->debug("#calculateWrightIndex(): Entering method");
        $this->wrightIndex = 0;
        $ancestors = array();
        $duplicates = array();
        $treeDuplicates = array();
        $commonAncestorsCodes = array();
        $wrightSummationRelevantDuplicates = array();
        $wrightIndividualRelevantDuplicates = array();

        $treeDupesCount = 0;

        foreach ($this->tree as $key => $val) {
            if(isset($ancestors[$val->getId()])) {
                $duplicates[$val->getId()]=$val;
                foreach ($this->tree as $treeKey => $treeItem) {
                    if($treeItem->getId() == $val->getId()) {
                        $treeDuplicates[$treeDupesCount][$treeKey] = $treeItem;
                        $commonAncestorsCodes[] = $treeKey;
                    }
                }
                $treeDupesCount++;
            }
            $ancestors[$val->getId()]=$val;
        }

        if(sizeof($duplicates) > 0) {

            foreach ($treeDuplicates as $key => $val) {
                $treelevels = array_keys($val);

                foreach($treelevels as $treeKey) {
                    if (($this->tree[$treeKey])->getWrightIndex() == null) {
                        ($this->tree[$treeKey])->walk("", $this->tree[$treeKey]);
                        ($this->tree[$treeKey])->calculateWrightIndex();
                    }
                }

                $treelevels = Dog::isolateSummationTree($treelevels, $commonAncestorsCodes);

                if($treelevels != null) {
                    $wrightSummationRelevantDuplicates[] = $treelevels;
                } else {
                    $wrightIndividualRelevantDuplicates[] = array_keys($val);
                }
            }

            foreach ($wrightSummationRelevantDuplicates as $xxDuplicate) {
                foreach($xxDuplicate as $xDuplicate) {
                    $this->logger->info("Wright Index sum element: '" . $xDuplicate[0] . "'(" . $this->tree[$xDuplicate[0]]->name . ") and '" . $xDuplicate[1] . "'(" . $this->tree[$xDuplicate[1]]->name . ") with it's own WrightIndex: " . ($this->tree[$xDuplicate[0]])->getWrightIndex());
                    $additionToSum = pow(0.5, (strlen($xDuplicate[0]) - 1) + (strlen($xDuplicate[1]) - 1) + 1) * (1 + ($this->tree[$xDuplicate[0]])->getWrightIndex());
                    $this->logger->info("adding 0.5 ^ (" .  (strlen($xDuplicate[0]) - 1) . " + " . (strlen($xDuplicate[1]) - 1) . " +1) * (1 + " . ($this->tree[$xDuplicate[0]])->getWrightIndex() . ")");
                    $this->wrightIndex += $additionToSum;
                }
            }

        } else {
            $this->wrightIndex = 0;
        }

        if($debug) {
            echo json_encode(
                    array(
                        "this" => $this,
                        "ancestors" => $ancestors,
                        "duplicates" => $duplicates,
                        "treeDuplicates" => $treeDuplicates,
                        "commonAncestorsCodes" => $commonAncestorsCodes,
                        "wrightSummationRelevantDuplicates" => $wrightSummationRelevantDuplicates,
                        "wrightIndividualRelevantDuplicates" => $wrightIndividualRelevantDuplicates
                    )
            );
        }
        $this->logger->debug("#calculateWrightIndex(): Leaving method for Dog " . json_encode($this));
    }

    private static function isolateSummationTree($treelevels = array(), $commonAncestorsCodes = array()) {

        asort($commonAncestorsCodes);

        $fatherLine = array();
        $motherLine = array();

        foreach ($treelevels as $val) {
            if(!in_array(substr($val,0 , strlen($val)-1),$commonAncestorsCodes)) {
                if(substr($val,0,1) == "f") {
                    $fatherLine[] = $val;
                    asort($fatherLine);
                } else {
                    $motherLine[] = $val;
                    asort($motherLine);
                }
            }
        }

        if (sizeof($fatherLine) == 0 || sizeof($motherLine) == 0) {
            return null;
        }

        $resultArray = array();
        foreach ($fatherLine as $father) {
            foreach ($motherLine as $mother) {
                $resultArray[$father.".".$mother] = array($father, $mother);
            }
        }

        return $resultArray;
    }

}