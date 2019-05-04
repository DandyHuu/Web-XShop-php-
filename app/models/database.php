<?php
class database{
    var $_dbh = '';
    var $_sql = '';
    var $_cursor = NULL;        
    function __construct() {
        try
		{
			$this->_dbh = new PDO('mysql:host=127.0.0.1; dbname=test','root','');
			$this->_dbh->query('set names "utf8"');
		}
		catch(Exception $ex)
		{
			echo $ex->getMessage();
			die();
		}
		
    }
    
    public function setQuery($sql) {
        $this->_sql = $sql;
    }
    
    //Function execute the query 
    public function execute($options=array()) {
        $this->_cursor = $this->_dbh->prepare($this->_sql);
        if($options) {  //If have $options then system will be tranmission parameters
            for($i=0;$i<count($options);$i++) {
                $this->_cursor->bindParam($i+1,$options[$i]);
            }
        }
        $this->_cursor->execute();
        return $this->_cursor;
    }
    
    //Funtion load datas on table
    public function loadAllRows($options=array()) {
        if(!$options) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($options))
                return false;
        }
        return $result->fetchAll(PDO::FETCH_OBJ);
    }
    
    //Funtion load 1 data on the table
    public function loadRow($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_OBJ);
    }
    
    //Function count the record on the table
    public function loadRecord($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_COLUMN);
    }
    
    public function getLastId() {
        return $this->_dbh->lastInsertId();
    }
    
    public function disconnect() {
        $this->_dbh = NULL;
    }

    function time_stamp($time_ago) {
        $cur_time=time();
        // echo "<hr>";
        // echo $cur_time;
        $time_elapsed = $cur_time - $time_ago;
        // $seconds = $time_elapsed ;
        // $minutes = round($time_elapsed / 60 );
        // $hours = round($time_elapsed / 3600);
        // $days = round($time_elapsed / 86400 );
        // $weeks = round($time_elapsed / 604800);
        // $months = round($time_elapsed / 2600640 );
        // Seconds
        $time="";
        $arr=[60,3600,86400,604800,2600640];
        var_dump($arr);die;
        for ($i=0; $i < count($arr); $i++) { 
           if (round($time_elapsed / $arr[$i]) <= 60 ) {
               $time.= " Cách đây" .round($time_elapsed / $arr[$i]) ."giây ";
           }
           else if(round($time_elapsed / $arr[$i])  <= 60) {
            if(round($time_elapsed / $arr[$i]) ==1) {
                $time.= " Cách đây 1 phút ";
            }
            else {
                $time.= " Cách đây" .round($time_elapsed / $arr[$i]) ."phút";
            }

           }
           else if(round($time_elapsed / $arr[$i])  <=24) {
            if(round($time_elapsed / $arr[$i]) ==1) {
                $time.= "Cách đây 1 tiếng ";
            }
            else {
                $time.= " Cách đây" .round($time_elapsed / $arr[$i]) ."tiếng ";
            }
           }
        }
        // if($seconds <= 60) {
        //      $time.= " Cách đây $seconds giây ";
        // }
        //Minutes
        // else if($minutes <= 60) {
        //     if($minutes==1) {
        //         $time.= " Cách đây 1 phút ";
        //     }
        //     else {
        //         $time.= " Cách đây $minutes phút";
        //     }
        // }
        //Hours
        // else if($hours <=24) {
        //     if($hours==1) {
        //         $time.= "Cách đây 1 tiếng ";
        //     }
        //     else {
        //         $time.= " Cách đây  $hours tiếng ";
        //     }
        // }
        // //Days
        // else if($days <= 7) {
        //     if($days==1) {
        //         $time.= " Ngày hôm qua ";
        //     }
        //     else {
        //         $time.= " Cách đây  $days ngày ";
        //     }
        // }
        // //Weeks
        // else if($weeks <= 4.3) {
        //     if($weeks==1) {
        //         $time.= " Cách đây 1 tuần ";
        //     }
        //     else {
        //         $time.= " Cách đây  $weeks tuần";
        //     }
        // }
        // //Months
        // else if($months <=12) {
        //     if($months==1) {
        //         $time.= " Cách đây 1 tháng ";
        //     }
        //     else {
        //         $time.= " Cách đây $months tháng";
        //     }
        // } 
        return $time;       
    }
}
?>  