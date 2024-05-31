<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ksgstaff;

class ksgstaffController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ksgstaff';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ksgstaff());

        $grid->column('fullName', __('FullName'));
        $grid->column('idNumber', __('IdNumber'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ksgstaff::findOrFail($id));

        $show->field('fullName', __('FullName'));
        $show->field('idNumber', __('IdNumber'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ksgstaff());

        $form->text('fullName', __('FullName'));
        $form->text('idNumber', __('IdNumber'));

        return $form;
    }
}
