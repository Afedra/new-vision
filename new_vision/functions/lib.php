<?php
class Table
{
	public static function Script()
	{
		return "CREATE TABLE IF NOT EXISTS Branch(BranchID int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, street char (100) NOT NULL, city char (100) NOT NULL, zone char (100) NOT NULL, phone_no int (15) NOT NULL, email char (100) NOT NULL);
				CREATE TABLE IF NOT EXISTS Client(ClientNo int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, Fname char (100) NOT NULL, Lname char (100) NOT NULL, street char (100), city char (100) NOT NULL, zone char (100), BranchID int (11) NOT NULL, FOREIGN KEY (BranchID) REFERENCES Branch (BranchID));
				CREATE TABLE IF NOT EXISTS Adverts(advertID int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, advertDatetime DATE NOT NULL, mention int (11) NOT NULL, airtime int (11) NOT NULL, spot_no int (11) NOT NULL, page_size int (11) NOT NULL, advert_order int (11) NOT NULL, sale_executiveID int (11) NOT NULL, amount int (11) NOT NULL, details varchar (10000000) NOT NULL, ClientNo int (11) NOT NULL, FOREIGN KEY (ClientNo) REFERENCES Client (ClientNo));
				CREATE TABLE IF NOT EXISTS Level(Staff_level int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, Staff_Identity char (200) NOT NULL);
				CREATE TABLE IF NOT EXISTS Staff(StaffId int (11) NOT NULL AUTO_INCREMENT PRIMARY KEY, Staff_level int (11) NOT NULL, BranchID int (11) NOT NULL, email char (100) NOT NULL,  password varchar(2000) NOT NULL,Fname char (100) NOT NULL, Lname char (100), StartDate DATE NOT NULL, Salary int (15) NOT NULL, transportAllowance int NOT NULL, carAllowance int NOT NULL, computerAllowance int NOT NULL, FOREIGN KEY (BranchID) REFERENCES Branch (BranchID), FOREIGN KEY (Staff_level) REFERENCES Level (Staff_level));
				CREATE TABLE IF NOT EXISTS Invoice(advertID int (11), ReceiptNo int  , InvoiceNo int AUTO_INCREMENT PRIMARY KEY, Amount int (10), FOREIGN KEY (advertID) REFERENCES Adverts (advertID));
				INSERT INTO Level (Staff_level, Staff_Identity) VALUES (1, 'client'), (2, 'sales executive'), (3, 'designer'), (4, 'booking clerk'), (5, 'accountant'), (6, 'debt collector'), (7, 'auditor'), (8, 'manager');
				INSERT INTO Branch (BranchID, street, city, zone, phone_no, email) VALUES (1, 'first street industrial area', 'kampala', 'jinja road', 764532454, 'firststreet@newvision.com'),(2, 'nateete', 'kampala', 'kamba', 742646437, 'nateete@newvision.com'),(3, 'ntinda', 'kampala', 'kaku', 754653412, 'ntinda@newvision.com'),(4, 'nile', 'jinja', 'victoria zone', 734563245, 'nile@newvision.com'),(5, 'masaba', 'mbale', 'basaba', 743567476, 'mbale@newvision.com');
				INSERT INTO Staff (StaffId, Staff_level, BranchID, email, password, Fname, Lname, StartDate, Salary, transportAllowance, carAllowance, computerAllowance) VALUES (1, 1, 2, 'martin@newvision.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'martin', 'martin', '2017-05-31', 100000, 1, 1, 0), (2, 2, 3, 'bartile@newvision.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'bartile', 'bartile', '2017-05-27', 2000000, 1, 0, 0), (3, 3, 3, 'moses@newvision.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'moses', 'moses', '2017-05-24', 300000, 0, 0, 0),(4, 4, 4, 'joshua@newvision.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'joshua', 'joshua', '2017-05-03', 400000, 1, 0, 1),(5, 5, 1, 'steve@newvision.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'Steven', 'Araka', '2017-05-16', 2000000, 1, 1, 1),(6, 6, 2, 'patric@newvision.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'patric', 'obaku', '2017-05-31', 500000, 1, 1, 1),(7, 7, 3, 'ebuku@newvision.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'ebuku', 'collin', '2017-05-12', 600000, 1, 1, 1),(8, 8, 1, 'sempa@newvision.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'sempa', 'sempa', '2017-05-25', 8000000, 1, 1, 1);
				";
	}
}


class Install
{
	private static $dbhost = 'localhost';
	private static $dbname = 'newvision';
	private static $dbusername = 'root';
	private static $dbpassword = 'emmanuel';
	private static $link;
	private static $instance;
	private static $installed;
	
	private function __construct()
	{
		static::$link = new mysqli();
		static::$link->real_connect(static::$dbhost, static::$dbusername, static::$dbpassword);		
		if(static::$link->connect_error)
		{
			die("Database connnection failed".static::$link->connect_error);
		}
	}

	public static function Instance()
	{
		static::$instance = (null === static::$instance ? new self() : static::$instance);
		return static::$instance;
	}

	public static function DatabaseConnection()
	{
		do
		{
			if($res = static::$link->store_result())
			{
				$res->free();
			}
		} while (static::$link->more_results() && static::$link->next_result());

		return static::$link;
	}
	
	/* Creates database if it doesn't exists
	 * @params none
	 *
	 * return boolean
	 */
	public function Start()
	{
		if(!static::$installed)
		{
			if(!static::$link->select_db(static::$dbname))
			{
				static::$link->query("CREATE DATABASE IF NOT EXISTS NEWVISION DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci") ? $die = false: $die = true;
				
				if($die) return false;
				
				static::$link->select_db(static::$dbname);			
			} else {			
				static::$link->select_db(static::$dbname);			
			}
			return static::$installed = static::DatabaseMade();
		}
		else
		{
			return static::$installed;
		}		
	}
	
	/* Checks whether database has been installed
	 * @params none
	 *
	 * return boolean
	 */
	private static function DatabaseMade()
	{
		$created = static::CreateTables();
		if($created)
		{
			static::$installed = true;
		}
		else
		{
			static::$installed = false;
		}
		return $created;
	}

	/* Creates tables in databse
	 * @params none
	 *
	 * return boolean
	 */
	private static function CreateTables()
	{
		$tablescript = Table::Script();
		return static::$link->multi_query($tablescript) ? true : false;
	}
}
?>