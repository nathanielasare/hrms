<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $employee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Marital Statuses'), ['controller' => 'MaritalStatuses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Marital Status'), ['controller' => 'MaritalStatuses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job Titles'), ['controller' => 'JobTitles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job Title'), ['controller' => 'JobTitles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['controller' => 'Employees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employees form large-9 medium-8 columns content">
    <?= $this->Form->create($employee) ?>
    <fieldset>
        <legend><?= __('Edit Employee') ?></legend>
        <?php
            echo $this->Form->input('employe_number');
            echo $this->Form->input('lastname');
            echo $this->Form->input('firstname');
            echo $this->Form->input('middle_name');
            echo $this->Form->input('nick_name');
            echo $this->Form->input('birthday', ['empty' => true]);
            echo $this->Form->input('country_id', ['options' => $countries, 'empty' => true]);
            echo $this->Form->input('gender');
            echo $this->Form->input('marital_status_id', ['options' => $maritalStatuses]);
            echo $this->Form->input('ssn_num');
            echo $this->Form->input('drv_lin_num');
            echo $this->Form->input('drv_lin_exp_date', ['empty' => true]);
            echo $this->Form->input('joined_date', ['empty' => true]);
            echo $this->Form->input('status');
            echo $this->Form->input('job_title_id', ['options' => $jobTitles]);
            echo $this->Form->input('street1');
            echo $this->Form->input('street2');
            echo $this->Form->input('city_code');
            echo $this->Form->input('coun_code');
            echo $this->Form->input('provin_code');
            echo $this->Form->input('zipcode');
            echo $this->Form->input('home_telephone');
            echo $this->Form->input('mobile');
            echo $this->Form->input('work_telephone');
            echo $this->Form->input('work_email');
            echo $this->Form->input('other_email');
            echo $this->Form->input('smoker');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
