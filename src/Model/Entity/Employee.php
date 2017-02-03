<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property int $employe_number
 * @property string $lastname
 * @property string $firstname
 * @property string $middle_name
 * @property string $nick_name
 * @property \Cake\I18n\Time $birthday
 * @property int $country_id
 * @property int $gender
 * @property int $marital_status_id
 * @property string $ssn_num
 * @property string $drv_lin_num
 * @property \Cake\I18n\Time $drv_lin_exp_date
 * @property \Cake\I18n\Time $joined_date
 * @property int $status
 * @property int $job_title_id
 * @property string $street1
 * @property string $street2
 * @property string $city_code
 * @property string $coun_code
 * @property string $provin_code
 * @property string $zipcode
 * @property string $home_telephone
 * @property string $mobile
 * @property string $work_telephone
 * @property string $work_email
 * @property string $other_email
 * @property int $smoker
 *
 * @property \App\Model\Entity\Employee[] $employees
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\MaritalStatus $marital_status
 * @property \App\Model\Entity\JobTitle $job_title
 */
class Employee extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
