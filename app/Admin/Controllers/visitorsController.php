<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\visitors;

class visitorsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'visitors';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new visitors());

        $grid->column('fullName', __('FullName'));
        $grid->column('idNumber', __('IdNumber'));
        $grid->column('arrivalDateTime', __('ArrivalDateTime'));
        $grid->column('officeVisiting', __('OfficeVisiting'));
        $grid->column('officerName', __('OfficerName'));
        $grid->column('visitorPurpose', __('VisitorPurpose'));

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
        $show = new Show(visitors::findOrFail($id));

        $show->field('fullName', __('FullName'));
        $show->field('idNumber', __('IdNumber'));
        $show->field('arrivalDateTime', __('ArrivalDateTime'));
        $show->field('officeVisiting', __('OfficeVisiting'));
        $show->field('officerName', __('OfficerName'));
        $show->field('visitorPurpose', __('VisitorPurpose'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new visitors());

        $form->text('fullName', __('FullName'));
        $form->text('idNumber', __('IdNumber'));
        $form->datetime('arrivalDateTime', __('ArrivalDateTime'))->default(date('Y-m-d H:i:s'));
        $form->textarea('officeVisiting', __('OfficeVisiting'));
        $form->textarea('officerName', __('OfficerName'));
        $form->textarea('visitorPurpose', __('VisitorPurpose'));

        return $form;
    }
}
