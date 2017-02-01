
<!-- MESSAGE BOX-->
<li>
    <a href="#"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard <?php echo $curcontrol; ?> </span></a>
</li>

<?php if($curcontrol == 'Pim'): ?>
<li class="active">
    <a href="Pim"><span class="fa fa-files-o"></span> <span class="xn-text">PIM</span></a>
    <ul>
        <li><a href="#"><span class="xn-text">Employees</span></a></li>
    </ul>
</li>
<?php else: ?>
<li><a href="Pim"><span class="fa fa-files-o"></span> <span class="xn-text">PIM</span></a></li>
<?php endif; ?>

<li>
    <a href="#"><span class="fa fa-th"></span> <span class="xn-text">Leave</span></a>
</li>
<li>
    <a href="#"><span class="fa fa-dot-circle-o"></span> <span class="xn-text">Recruitment</span></a>
</li>
<li>
    <a href="#"><span class="fa fa-check-square-o"></span> <span class="xn-text">Performance</span></a>
</li>
<!--<li>
    <a href="#"><span class="fa fa-credit-card"></span> <span class="xn-text">Payroll</span></a>
</li>-->

<?php if($curcontrol == 'Admin'): ?>
    <li class="active">
        <a href="Admin"><span class="fa fa-cogs"></span> <span class="xn-text">Admin</span></a>
        <ul>
            <li><a href="#"><span class="xn-text">User Management</span></a></li>
            <li><a href="#"><span class="xn-text">Jobs</span></a></li>
            <li><a href="#"><span class="xn-text">Organization</span></a></li>
            <li><a href="#"><span class="xn-text">Qualification</span></a></li>
            <li><a href="#"><span class="xn-text">Nationalities</span></a></li>
        </ul>
    </li>
<?php else: ?>
<li><a href="Admin"><span class="fa fa-cogs"></span> <span class="xn-text">Admin</span></a></li>
<?php endif; ?>