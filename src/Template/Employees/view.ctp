<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Marital Statuses'), ['controller' => 'MaritalStatuses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marital Status'), ['controller' => 'MaritalStatuses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Job Titles'), ['controller' => 'JobTitles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Title'), ['controller' => 'JobTitles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($employee->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($employee->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middle Name') ?></th>
            <td><?= h($employee->middle_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nick Name') ?></th>
            <td><?= h($employee->nick_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $employee->has('country') ? $this->Html->link($employee->country->name, ['controller' => 'Countries', 'action' => 'view', $employee->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marital Status') ?></th>
            <td><?= $employee->has('marital_status') ? $this->Html->link($employee->marital_status->name, ['controller' => 'MaritalStatuses', 'action' => 'view', $employee->marital_status->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ssn Num') ?></th>
            <td><?= h($employee->ssn_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Drv Lin Num') ?></th>
            <td><?= h($employee->drv_lin_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Job Title') ?></th>
            <td><?= $employee->has('job_title') ? $this->Html->link($employee->job_title->name, ['controller' => 'JobTitles', 'action' => 'view', $employee->job_title->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street1') ?></th>
            <td><?= h($employee->street1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street2') ?></th>
            <td><?= h($employee->street2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City Code') ?></th>
            <td><?= h($employee->city_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coun Code') ?></th>
            <td><?= h($employee->coun_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provin Code') ?></th>
            <td><?= h($employee->provin_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zipcode') ?></th>
            <td><?= h($employee->zipcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Telephone') ?></th>
            <td><?= h($employee->home_telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($employee->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Telephone') ?></th>
            <td><?= h($employee->work_telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Work Email') ?></th>
            <td><?= h($employee->work_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Email') ?></th>
            <td><?= h($employee->other_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employe Number') ?></th>
            <td><?= $this->Number->format($employee->employe_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= $this->Number->format($employee->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($employee->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Smoker') ?></th>
            <td><?= $this->Number->format($employee->smoker) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($employee->birthday) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Drv Lin Exp Date') ?></th>
            <td><?= h($employee->drv_lin_exp_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Joined Date') ?></th>
            <td><?= h($employee->joined_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($employee->employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employe Number') ?></th>
                <th scope="col"><?= __('Lastname') ?></th>
                <th scope="col"><?= __('Firstname') ?></th>
                <th scope="col"><?= __('Middle Name') ?></th>
                <th scope="col"><?= __('Nick Name') ?></th>
                <th scope="col"><?= __('Birthday') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Marital Status Id') ?></th>
                <th scope="col"><?= __('Ssn Num') ?></th>
                <th scope="col"><?= __('Drv Lin Num') ?></th>
                <th scope="col"><?= __('Drv Lin Exp Date') ?></th>
                <th scope="col"><?= __('Joined Date') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Job Title Id') ?></th>
                <th scope="col"><?= __('Street1') ?></th>
                <th scope="col"><?= __('Street2') ?></th>
                <th scope="col"><?= __('City Code') ?></th>
                <th scope="col"><?= __('Coun Code') ?></th>
                <th scope="col"><?= __('Provin Code') ?></th>
                <th scope="col"><?= __('Zipcode') ?></th>
                <th scope="col"><?= __('Home Telephone') ?></th>
                <th scope="col"><?= __('Mobile') ?></th>
                <th scope="col"><?= __('Work Telephone') ?></th>
                <th scope="col"><?= __('Work Email') ?></th>
                <th scope="col"><?= __('Other Email') ?></th>
                <th scope="col"><?= __('Smoker') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->employees as $employees): ?>
            <tr>
                <td><?= h($employees->id) ?></td>
                <td><?= h($employees->employe_number) ?></td>
                <td><?= h($employees->lastname) ?></td>
                <td><?= h($employees->firstname) ?></td>
                <td><?= h($employees->middle_name) ?></td>
                <td><?= h($employees->nick_name) ?></td>
                <td><?= h($employees->birthday) ?></td>
                <td><?= h($employees->country_id) ?></td>
                <td><?= h($employees->gender) ?></td>
                <td><?= h($employees->marital_status_id) ?></td>
                <td><?= h($employees->ssn_num) ?></td>
                <td><?= h($employees->drv_lin_num) ?></td>
                <td><?= h($employees->drv_lin_exp_date) ?></td>
                <td><?= h($employees->joined_date) ?></td>
                <td><?= h($employees->status) ?></td>
                <td><?= h($employees->job_title_id) ?></td>
                <td><?= h($employees->street1) ?></td>
                <td><?= h($employees->street2) ?></td>
                <td><?= h($employees->city_code) ?></td>
                <td><?= h($employees->coun_code) ?></td>
                <td><?= h($employees->provin_code) ?></td>
                <td><?= h($employees->zipcode) ?></td>
                <td><?= h($employees->home_telephone) ?></td>
                <td><?= h($employees->mobile) ?></td>
                <td><?= h($employees->work_telephone) ?></td>
                <td><?= h($employees->work_email) ?></td>
                <td><?= h($employees->other_email) ?></td>
                <td><?= h($employees->smoker) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
