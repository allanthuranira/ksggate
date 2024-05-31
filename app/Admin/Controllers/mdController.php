<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\md;

class mdController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'md';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new md());

        $grid->column('idNumber', __('IdNumber'));
        $grid->column('arrivalDateTime', __('ArrivalDateTime'));
        $grid->column('motorNumber', __('MotorNumber'));
        $grid->column('ksgStaffOrParticipantOrVisitor', __('KsgStaffOrParticipantOrVisitor'));

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
        $show = new Show(md::findOrFail($id));

        $show->field('idNumber', __('IdNumber'));
        $show->field('arrivalDateTime', __('ArrivalDateTime'));
        $show->field('motorNumber', __('MotorNumber'));
        $show->field('ksgStaffOrParticipantOrVisitor', __('KsgStaffOrParticipantOrVisitor'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new md());

        $form->text('idNumber', __('IdNumber'));
        $form->datetime('arrivalDateTime', __('ArrivalDateTime'))->default(date('Y-m-d H:i:s'));
        $form->text('motorNumber', __('MotorNumber'));
        $form->text('ksgStaffOrParticipantOrVisitor', __('KsgStaffOrParticipantOrVisitor'));

        return $form;
    }
}
