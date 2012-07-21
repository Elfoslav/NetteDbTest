<?php

use Nette\Config\Loader;
/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class HomepagePresenter extends BasePresenter
{

	public function renderDefault()
	{
	    $this->template->orders = $this->context->createOrders()->order("id DESC");
	    $this->template->food = $this->context->createFood();
	    $this->template->categories = $this->context->createCategories();
	}

}
