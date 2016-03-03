<?php

define( 'servername', 'localhost' );    // set database host
define( 'username', 'root' );           // set database user
define( 'password', '' );           // set database password
define( 'database', 'nsbm_lms' );       // set database name

class DB{

    private $link = null;




    public function __construct()
    {
        try {
            $this->link = new mysqli( servername, username, password, database );
            echo "OK";
        } catch ( Exception $e ) {
            die( 'Unable to connect to database' );
        }
    }


    public function query( $query )
    {

        $rawStatement = explode(" ", $query);
        # Which SQL statement is used
        $statement = strtolower($rawStatement[0]);

        $results = $this->link->query( $query );


        if( $this->link->error )
        {
            var_dump( $this->link->error, $query );
            return false;
        }

        if ($statement === 'select' || $statement === 'show') {
            $row = array();
            while( $r =  $results->fetch_assoc())
            {
                $row[] = $r;
            }
            return $row;
        }
        elseif ( $statement === 'insert' ||  $statement === 'update' || $statement === 'delete' ) {
            if ($results){
                return 1;
            }else{
                return 0;
            }
        }
        else {
            return NULL;
        }

    }


}

