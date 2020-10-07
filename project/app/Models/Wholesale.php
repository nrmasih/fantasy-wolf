<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wholesale extends Model
{
    protected $fillable = ['first_name','last_name','title','email','phone','fax','billing_contact_name','billing_email','billing_phone','organization_type','organization_name','website','years_in_business','number_of_locations','appx_volume','sell_online','hq_address','ship_address','brands_carry','your_customers','how_find_us','facebookinfo','twitterinfo','instagraminfo','pinterestinfo','last_year_revenue','num_sales_staff','num_support_staff','other_vendors','major_retailers','resaler_merchandise','why_distributor','resonate_customers','ftype','storeImage1','storeImage2','storeImage3','storeImage4'];
    public $timestamps = false;
}
