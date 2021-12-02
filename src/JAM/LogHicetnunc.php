<?php
/**
 * @author jambonbill
 */

namespace JAM;

use PDO;
use Exception;

class LogHicetnunc
{
	private $_Base;
	private $_user;

	public function __construct (\Djang\Base $Base)
    {
        $this->_Base=$Base;
    }

    public function db()
    {
    	return $this->_Base->db();
    }

    public function _uid()
    {
    	return $this->_Base->userId();
    }

    private function log()
    {
        return $this->_Base->log()->withName((new \ReflectionClass($this))->getShortName());
    }


    // Hicetnunc //

    /**
     * Return the whole shit
     * @return [type] [description]
     */
    public function list()
    {

        $sql="SELECT * FROM log_hicetnunc WHERE created_by=19 ORDER BY hen_id DESC;";
        $q=$this->db()->query($sql) or die(print_r($this->db()->errorInfo(), true) . "<hr />$sql");

        $dat=[];
        while($r=$q->fetch(PDO::FETCH_ASSOC)){
            $dat[]=$r;
        }
        return $dat;
    }

}