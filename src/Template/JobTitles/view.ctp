<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Job Title'), ['action' => 'edit', $jobTitle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job Title'), ['action' => 'delete', $jobTitle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jobTitle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Job Titles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job Title'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobTitles view large-9 medium-8 columns content">
    <h3><?= h($jobTitle->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($jobTitle->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($jobTitle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $jobTitle->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Employees') ?></h4>
        <?php if (!empty($jobTitle->employees)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Employe Number') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
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
            <?php foreach ($jobTitle->employees as $employees): ?>
            <tr>
                <td><?= h($employees->id) ?></td>
                <td><?= h($employees->employe_number) ?></td>
                <td><?= h($employees->employee_id) ?></td>
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
