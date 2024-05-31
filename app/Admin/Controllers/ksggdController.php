<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\ksggd;

class ksggdController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ksggd';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ksggd());

        $grid->column('fullName', __('FullName'));
        $grid->column('idNumber', __('IdNumber'));
        $grid->column('arrivalDateTime', __('ArrivalDateTime'));
        $grid->column('MeansQuestion', __('MeansQuestion'));
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
        $show = new Show(ksggd::findOrFail($id));

        $show->field('fullName', __('FullName'));
        $show->field('idNumber', __('IdNumber'));
        $show->field('arrivalDateTime', __('ArrivalDateTime'));
        $show->field('MeansQuestion', __('MeansQuestion'));
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
        $form = new Form(new ksggd());

        $form->text('fullName', __('FullName'));
        $form->text('idNumber', __('IdNumber'));
        $form->datetime('arrivalDateTime', __('ArrivalDateTime'))->default(date('Y-m-d H:i:s'));
        $form->textarea('MeansQuestion', __('MeansQuestion'));
        $form->textarea('ksgStaffOrParticipantOrVisitor', __('KsgStaffOrParticipantOrVisitor'));

        return $form;
    }
}
