<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Marital Statuses'), ['controller' => 'MaritalStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Marital Status'), ['controller' => 'MaritalStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job Titles'), ['controller' => 'JobTitles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job Title'), ['controller' => 'JobTitles', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employees index large-9 medium-8 columns content">
    <h3><?= __('Employees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employe_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('middle_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nick_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthday') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marital_status_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ssn_num') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drv_lin_num') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drv_lin_exp_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('joined_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('job_title_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coun_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('provin_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zipcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('work_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('other_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('smoker') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= $this->Number->format($employee->id) ?></td>
                <td><?= $this->Number->format($employee->employe_number) ?></td>
                <td><?= h($employee->lastname) ?></td>
                <td><?= h($employee->firstname) ?></td>
                <td><?= h($employee->middle_name) ?></td>
                <td><?= h($employee->nick_name) ?></td>
                <td><?= h($employee->birthday) ?></td>
                <td><?= $employee->has('country') ? $this->Html->link($employee->country->name, ['controller' => 'Countries', 'action' => 'view', $employee->country->id]) : '' ?></td>
                <td><?= $this->Number->format($employee->gender) ?></td>
                <td><?= $employee->has('marital_status') ? $this->Html->link($employee->marital_status->name, ['controller' => 'MaritalStatuses', 'action' => 'view', $employee->marital_status->id]) : '' ?></td>
                <td><?= h($employee->ssn_num) ?></td>
                <td><?= h($employee->drv_lin_num) ?></td>
                <td><?= h($employee->drv_lin_exp_date) ?></td>
                <td><?= h($employee->joined_date) ?></td>
                <td><?= $this->Number->format($employee->status) ?></td>
                <td><?= $employee->has('job_title') ? $this->Html->link($employee->job_title->name, ['controller' => 'JobTitles', 'action' => 'view', $employee->job_title->id]) : '' ?></td>
                <td><?= h($employee->street1) ?></td>
                <td><?= h($employee->street2) ?></td>
                <td><?= h($employee->city_code) ?></td>
                <td><?= h($employee->coun_code) ?></td>
                <td><?= h($employee->provin_code) ?></td>
                <td><?= h($employee->zipcode) ?></td>
                <td><?= h($employee->home_telephone) ?></td>
                <td><?= h($employee->mobile) ?></td>
                <td><?= h($employee->work_telephone) ?></td>
                <td><?= h($employee->work_email) ?></td>
                <td><?= h($employee->other_email) ?></td>
                <td><?= $this->Number->format($employee->smoker) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employee->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
