<?php

use Nette\Database\Table\Selection,
    Nette\Database\Connection;

/**
 * Description of Orders
 *
 * @author Administrator
 */
class Categories extends Selection {
    
    public function __construct(Connection $conn) {
	parent::__construct("categories", $conn);
    }
}

?>
