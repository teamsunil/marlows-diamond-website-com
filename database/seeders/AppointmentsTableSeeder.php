<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppointmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('appointments')->delete();
        
        \DB::table('appointments')->insert(array (
            0 => 
            array (
                'id' => 17,
                'title' => 'Ellen Meadowcroft',
                'email' => 'ellie.meadowcroft@gmail.com',
                'phone' => '07919375446',
                'description' => 'Hello ,

I hope you are well. 

Do you have any availability for this Saturday for me and my partner to browse wedding bands, as my partner purchased my engagement ring from you.

Any questions please let me know 

Kind regards 
Ellen Meadowcroft',
                'custom_url' => NULL,
                'is_deleted' => 0,
                'deleted_at' => NULL,
                'created_at' => '2022-05-24 01:22:43',
                'updated_at' => '2022-05-24 01:22:43',
            ),
            1 => 
            array (
                'id' => 41,
                'title' => 'Sarah summers',
                'email' => 'Sarahsummers0289@gmail.com',
                'phone' => '07792220979',
                'description' => 'Hi.

I am looking to get my platinum wedding ring resized (purchased from you) and a white gold engagement ring resized and recoated.

Please can you advise the cost and lead time to do this please :)',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-05-27 13:34:47',
            'updated_at' => '2022-05-27 13:34:47',
        ),
        2 => 
        array (
            'id' => 43,
            'title' => 'Katherine',
            'email' => 'katherinegordon92@hotmail.com',
            'phone' => '07803353910',
            'description' => 'Looking for wedding rings. You helped my fiance with my engagement ring so would love your help.',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-05-27 15:47:20',
            'updated_at' => '2022-05-27 15:47:20',
        ),
        3 => 
        array (
            'id' => 52,
            'title' => 'Matt Lange',
            'email' => 'm_lange001@hotmail.com',
            'phone' => '07917093365',
            'description' => 'Hi there

I purchased a ring from yourselves on Monday 23 May and we need to get it resized (smaller).. Are you open on Thursday this week? If so, could we arrange a time in the morning to come up and have it amended? Thanks  Matt',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-05-30 13:24:29',
            'updated_at' => '2022-05-30 13:24:29',
        ),
        4 => 
        array (
            'id' => 56,
            'title' => 'Helen Blyth',
            'email' => 'helenblyth52@gmail.com',
            'phone' => '+447483263322',
            'description' => 'Rough price on solitaire engagement ring with yellow gold band,  and approx. 1 - 1.2cwt laboratory diamond with excellent cut, colour and clarity . Thankyou.',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-05-31 16:15:10',
            'updated_at' => '2022-05-31 16:15:10',
        ),
        5 => 
        array (
            'id' => 59,
            'title' => 'Ashling James',
            'email' => 'hey_ash@hotmail.co.uk',
            'phone' => '07595767992',
            'description' => 'Hello,

I am looking for a lab grown diamond wedding band - I am after a tapered baguette with some small round stones decending in size next to the tapered baguette, in 18ct white gold for ring size H.

I am wondering if this is something you would be able to create?

Look forward to hearing from you.

Ashling',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-05-31 22:39:41',
            'updated_at' => '2022-05-31 22:39:41',
        ),
        6 => 
        array (
            'id' => 60,
            'title' => 'Sukhveer Seehra',
            'email' => 'sonuseehra1906@gmail.com',
            'phone' => '07791760967',
            'description' => 'Would like to look at some of your engagement rings',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-01 20:25:47',
            'updated_at' => '2022-06-01 20:25:47',
        ),
        7 => 
        array (
            'id' => 71,
            'title' => 'Hakeem',
            'email' => 'hakeembelaid@gmail.com',
            'phone' => '07570834117',
            'description' => 'Call or email me ASAP please thank you',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-03 21:06:32',
            'updated_at' => '2022-06-03 21:06:32',
        ),
        8 => 
        array (
            'id' => 72,
            'title' => 'Hakeem',
            'email' => 'hakeembelaid@gmail.com',
            'phone' => '07570834117',
            'description' => 'Call or email me ASAP please thank you',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-03 21:06:42',
            'updated_at' => '2022-06-03 21:06:42',
        ),
        9 => 
        array (
            'id' => 74,
            'title' => 'Meena Venkat',
            'email' => 'mdvmeena@hotmaim.com',
            'phone' => '07552079353',
            'description' => 'Hi team, would like to book a slot to go engagement ring shopping with my fiancée this weds 8th June before midday for sizing etc. do we need to formally book an appointment? KR meena',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-04 23:03:53',
            'updated_at' => '2022-06-04 23:03:53',
        ),
        10 => 
        array (
            'id' => 75,
            'title' => 'Meena Venkat',
            'email' => 'mdvmeena@hotmaim.com',
            'phone' => '07552079353',
            'description' => 'Hi team, would like to book a slot to go engagement ring shopping with my fiancée this weds 8th June before midday for sizing etc. do we need to formally book an appointment? KR meena',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-04 23:03:55',
            'updated_at' => '2022-06-04 23:03:55',
        ),
        11 => 
        array (
            'id' => 76,
            'title' => 'Meena Venkat',
            'email' => 'mdvmeena@hotmaim.com',
            'phone' => '07552079353',
            'description' => 'Hi team, would like to book a slot to go engagement ring shopping with my fiancée this weds 8th June before midday for sizing etc. do we need to formally book an appointment? KR meena',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-04 23:03:56',
            'updated_at' => '2022-06-04 23:03:56',
        ),
        12 => 
        array (
            'id' => 77,
            'title' => 'Meena Venkat',
            'email' => 'mdvmeena@hotmaim.com',
            'phone' => '07552079353',
            'description' => 'Hi team, would like to book a slot to go engagement ring shopping with my fiancée this weds 8th June before midday for sizing etc. do we need to formally book an appointment? KR meena',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-04 23:04:10',
            'updated_at' => '2022-06-04 23:04:10',
        ),
        13 => 
        array (
            'id' => 80,
            'title' => 'David Scott',
            'email' => 'sctt.david@yahoo.co.uk',
            'phone' => '07957059671',
            'description' => 'Hi, I’m interested in a platinum 6 claw solitaire diamond ring 0.50 platinum size L. I know you do various designs and settings and would quite like to come have a look.  How long does it take to have a ring made and ready?',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-05 12:36:21',
            'updated_at' => '2022-06-05 12:36:21',
        ),
        14 => 
        array (
            'id' => 81,
            'title' => 'David Scott',
            'email' => 'sctt.david@yahoo.co.uk',
            'phone' => '07957059671',
            'description' => 'Hi, I’m interested in a platinum 6 claw solitaire diamond ring 0.50 platinum size L. I know you do various designs and settings and would quite like to come have a look.  How long does it take to have a ring made and ready?',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-05 12:36:22',
            'updated_at' => '2022-06-05 12:36:22',
        ),
        15 => 
        array (
            'id' => 82,
            'title' => 'Helen Austen',
            'email' => 'hdb433@hotmail.com',
            'phone' => '07904 773617',
            'description' => '6 years ago we bought a diamond engagement ring and wedding ring from you but I’m finding they are getting a bit tight are you able to enlarge them? Many thanks',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-05 23:38:20',
            'updated_at' => '2022-06-05 23:38:20',
        ),
        16 => 
        array (
            'id' => 83,
            'title' => 'Helen Austen',
            'email' => 'hdb433@hotmail.com',
            'phone' => '07904 773617',
            'description' => '6 years ago we bought a diamond engagement ring and wedding ring from you but I’m finding they are getting a bit tight are you able to enlarge them? Many thanks',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-05 23:38:21',
            'updated_at' => '2022-06-05 23:38:21',
        ),
        17 => 
        array (
            'id' => 84,
            'title' => 'Helen Austen',
            'email' => 'hdb433@hotmail.com',
            'phone' => '07904 773617',
            'description' => '6 years ago we bought a diamond engagement ring and wedding ring from you but I’m finding they are getting a bit tight are you able to enlarge them? Many thanks',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-05 23:38:35',
            'updated_at' => '2022-06-05 23:38:35',
        ),
        18 => 
        array (
            'id' => 88,
            'title' => 'Amy Spirito',
            'email' => 'amy.spirito01@gmail.com',
            'phone' => '07817100260',
            'description' => 'Hello 
I’ve just ordered a wedding ring from yourselves I just wanted to confirm this will be delivered to me?',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-06 18:51:08',
            'updated_at' => '2022-06-06 18:51:08',
        ),
        19 => 
        array (
            'id' => 89,
            'title' => 'Amy Spirito',
            'email' => 'amy.spirito01@gmail.com',
            'phone' => '07817100260',
            'description' => 'Hello 
I’ve just ordered a wedding ring from yourselves I just wanted to confirm this will be delivered to me?',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-06 18:51:17',
            'updated_at' => '2022-06-06 18:51:17',
        ),
        20 => 
        array (
            'id' => 90,
            'title' => 'Amy Spirito',
            'email' => 'amy.spirito01@gmail.com',
            'phone' => '07817100260',
            'description' => 'Hello 
I’ve just ordered a wedding ring from yourselves I just wanted to confirm this will be delivered to me?',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-06 18:51:19',
            'updated_at' => '2022-06-06 18:51:19',
        ),
        21 => 
        array (
            'id' => 91,
            'title' => 'Amy Spirito',
            'email' => 'amy.spirito01@gmail.com',
            'phone' => '07817100260',
            'description' => 'Hello 
I’ve just ordered a wedding ring from yourselves I just wanted to confirm this will be delivered to me?',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-06 18:51:20',
            'updated_at' => '2022-06-06 18:51:20',
        ),
        22 => 
        array (
            'id' => 92,
            'title' => 'Amy Spirito',
            'email' => 'amy.spirito01@gmail.com',
            'phone' => '07817100260',
            'description' => 'Hello 
I’ve just ordered a wedding ring from yourselves I just wanted to confirm this will be delivered to me?',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-06 18:51:25',
            'updated_at' => '2022-06-06 18:51:25',
        ),
        23 => 
        array (
            'id' => 93,
            'title' => 'Amy Spirito',
            'email' => 'amy.spirito01@gmail.com',
            'phone' => '07817100260',
            'description' => 'Hello 
I’ve just ordered a wedding ring from yourselves I just wanted to confirm this will be delivered to me?',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-06 18:51:40',
            'updated_at' => '2022-06-06 18:51:40',
        ),
        24 => 
        array (
            'id' => 94,
            'title' => 'Amy Spirito',
            'email' => 'amy.spirito01@gmail.com',
            'phone' => '07817100260',
            'description' => 'Hello 
I’ve just ordered a wedding ring from yourselves I just wanted to confirm this will be delivered to me?',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-06 18:51:50',
            'updated_at' => '2022-06-06 18:51:50',
        ),
        25 => 
        array (
            'id' => 95,
            'title' => 'Amy Spirito',
            'email' => 'amy.spirito01@gmail.com',
            'phone' => '07817100260',
            'description' => 'Hello 
I’ve just ordered a wedding ring from yourselves I just wanted to confirm this will be delivered to me?',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-06 18:51:51',
            'updated_at' => '2022-06-06 18:51:51',
        ),
        26 => 
        array (
            'id' => 96,
            'title' => 'shally',
            'email' => 'snahar@btconnect.com',
            'phone' => '02074051477',
            'description' => 'test',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-06 18:59:33',
            'updated_at' => '2022-06-06 18:59:33',
        ),
        27 => 
        array (
            'id' => 98,
            'title' => 'Sam Lifford',
            'email' => 'samlifford@icloud.com',
            'phone' => '07733266166',
            'description' => 'Hi

We bought my engagement ring from yourselves a number of months ago which is a little too big and I would like to get re-sized please. I had been in touch about coming in but have been on Adoption leave from work and not in Birmingham so the months have passed by.

In addition, I would like to come in to order my wedding ring from yourselves.

Thanks
Sam',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 00:49:58',
            'updated_at' => '2022-06-07 00:49:58',
        ),
        28 => 
        array (
            'id' => 99,
            'title' => 'Sam Lifford',
            'email' => 'samlifford@icloud.com',
            'phone' => '07733266166',
            'description' => 'Hi

We bought my engagement ring from yourselves a number of months ago which is a little too big and I would like to get re-sized please. I had been in touch about coming in but have been on Adoption leave from work and not in Birmingham so the months have passed by.

In addition, I would like to come in to order my wedding ring from yourselves.

Thanks
Sam',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 00:50:03',
            'updated_at' => '2022-06-07 00:50:03',
        ),
        29 => 
        array (
            'id' => 100,
            'title' => 'Sam Lifford',
            'email' => 'samlifford@icloud.com',
            'phone' => '07733266166',
            'description' => 'Hi

We bought my engagement ring from yourselves a number of months ago which is a little too big and I would like to get re-sized please. I had been in touch about coming in but have been on Adoption leave from work and not in Birmingham so the months have passed by.

In addition, I would like to come in to order my wedding ring from yourselves.

Thanks
Sam',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 00:50:05',
            'updated_at' => '2022-06-07 00:50:05',
        ),
        30 => 
        array (
            'id' => 101,
            'title' => 'Sam Lifford',
            'email' => 'samlifford@icloud.com',
            'phone' => '07733266166',
            'description' => 'Hi

We bought my engagement ring from yourselves a number of months ago which is a little too big and I would like to get re-sized please. I had been in touch about coming in but have been on Adoption leave from work and not in Birmingham so the months have passed by.

In addition, I would like to come in to order my wedding ring from yourselves.

Thanks
Sam',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 00:50:08',
            'updated_at' => '2022-06-07 00:50:08',
        ),
        31 => 
        array (
            'id' => 103,
            'title' => 'Sam Lifford',
            'email' => 'samlifford@icloud.com',
            'phone' => '07733266166',
            'description' => 'Hi

We bought my engagement ring from yourselves a number of months ago which is a little too big and I would like to get re-sized please. I had been in touch about coming in but have been on Adoption leave from work and not in Birmingham so the months have passed by.

In addition, I would like to come in to order my wedding ring from yourselves.

Thanks
Sam',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 00:50:14',
            'updated_at' => '2022-06-07 00:50:14',
        ),
        32 => 
        array (
            'id' => 104,
            'title' => 'Sam Lifford',
            'email' => 'samlifford@icloud.com',
            'phone' => '07733266166',
            'description' => 'Hi

We bought my engagement ring from yourselves a number of months ago which is a little too big and I would like to get re-sized please. I had been in touch about coming in but have been on Adoption leave from work and not in Birmingham so the months have passed by.

In addition, I would like to come in to order my wedding ring from yourselves.

Thanks
Sam',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 00:50:18',
            'updated_at' => '2022-06-07 00:50:18',
        ),
        33 => 
        array (
            'id' => 105,
            'title' => 'Sam Lifford',
            'email' => 'samlifford@icloud.com',
            'phone' => '07733266166',
            'description' => 'Hi

We bought my engagement ring from yourselves a number of months ago which is a little too big and I would like to get re-sized please. I had been in touch about coming in but have been on Adoption leave from work and not in Birmingham so the months have passed by.

In addition, I would like to come in to order my wedding ring from yourselves.

Thanks
Sam',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 00:50:18',
            'updated_at' => '2022-06-07 00:50:18',
        ),
        34 => 
        array (
            'id' => 106,
            'title' => 'Sam Lifford',
            'email' => 'samlifford@icloud.com',
            'phone' => '07733266166',
            'description' => 'Hi

We bought my engagement ring from yourselves a number of months ago which is a little too big and I would like to get re-sized please. I had been in touch about coming in but have been on Adoption leave from work and not in Birmingham so the months have passed by.

In addition, I would like to come in to order my wedding ring from yourselves.

Thanks
Sam',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 00:50:25',
            'updated_at' => '2022-06-07 00:50:25',
        ),
        35 => 
        array (
            'id' => 107,
            'title' => 'Sam Lifford',
            'email' => 'samlifford@icloud.com',
            'phone' => '07733266166',
            'description' => 'Hi

We bought my engagement ring from yourselves a number of months ago which is a little too big and I would like to get re-sized please. I had been in touch about coming in but have been on Adoption leave from work and not in Birmingham so the months have passed by.

In addition, I would like to come in to order my wedding ring from yourselves.

Thanks
Sam',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 00:50:26',
            'updated_at' => '2022-06-07 00:50:26',
        ),
        36 => 
        array (
            'id' => 108,
            'title' => 'Sam Lifford',
            'email' => 'samlifford@icloud.com',
            'phone' => '07733266166',
            'description' => 'Hi

We bought my engagement ring from yourselves a number of months ago which is a little too big and I would like to get re-sized please. I had been in touch about coming in but have been on Adoption leave from work and not in Birmingham so the months have passed by.

In addition, I would like to come in to order my wedding ring from yourselves.

Thanks
Sam',
            'custom_url' => NULL,
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 00:50:26',
            'updated_at' => '2022-06-07 00:50:26',
        ),
        37 => 
        array (
            'id' => 112,
            'title' => 'Samantha Wilkinson',
            'email' => 'samantha_wilkinson@outlook.com',
            'phone' => '07841116388',
            'description' => 'Hi we bought our wedding rings from Marlows 8yrs ago and unfortunately my wedding ring has gotten too small and I had to take it off. I would lie it resized so I can wear it. Is this something that could be done and how much is it likely to cost? 
Thank you',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 16:24:54',
            'updated_at' => '2022-06-07 16:24:54',
        ),
        38 => 
        array (
            'id' => 114,
            'title' => 'Gajendra Kumar Sharma',
            'email' => 'sharma.gajendra@dotsquares.com',
            'phone' => '9782910841',
            'description' => 'This is final message of appointment section',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/product/addison',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-07 17:14:54',
            'updated_at' => '2022-06-07 17:14:54',
        ),
        39 => 
        array (
            'id' => 115,
            'title' => 'Evie Rose Heffer',
            'email' => 'eheff500@gmail.com',
            'phone' => '07801584142',
            'description' => 'Good afternoon, I am looking into getting my engagement ring tightened. Probably around 2 sizes smaller but I would need to be properly sized. Please can I enquire about how much this may be? Also, if you have any availability on 18.6.22 and how long would it take to do? Thank you in advance! Evie Heffer',
            'custom_url' => 'http://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-09 22:33:38',
            'updated_at' => '2022-06-09 22:33:38',
        ),
        40 => 
        array (
            'id' => 116,
            'title' => 'Sam',
            'email' => 'samstations44@gmail.com',
            'phone' => '07823338424',
            'description' => 'Please contact email. Simple necklace earring, 2 lovely ladies',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-13 02:50:16',
            'updated_at' => '2022-06-13 02:50:16',
        ),
        41 => 
        array (
            'id' => 117,
            'title' => 'Melissa',
            'email' => 'melissagreenhow66@gmail.com',
            'phone' => '07740590777',
            'description' => 'Hi there we had my engagement ring from you last year and collected our wedding rings last month ,just wondering if you did a complimentary engraving on the wedding rings??
Thanks so much
Melissa',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-14 00:52:44',
            'updated_at' => '2022-06-14 00:52:44',
        ),
        42 => 
        array (
            'id' => 118,
            'title' => 'vasu jada',
            'email' => 'vasurjada@gmail.com',
            'phone' => '9081547521',
        'description' => 'I am manufacturer of lab grown (CVD) diamonds if you are using that diamonds than msgn or whatsapp me',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-14 09:47:17',
            'updated_at' => '2022-06-14 09:47:17',
        ),
        43 => 
        array (
            'id' => 119,
            'title' => 'Paul Sheppard',
            'email' => 'rpservicesuk@hotmail.com',
            'phone' => '07980465957',
            'description' => 'Good morning I placed an order yesterday and was hoping to get some information on delivery dates, many thanks Paul Sheppard',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-14 16:11:58',
            'updated_at' => '2022-06-14 16:11:58',
        ),
        44 => 
        array (
            'id' => 120,
            'title' => 'Andy',
            'email' => 'andy_livo@hotmail.com',
            'phone' => '07860855641',
            'description' => 'Hello, I know exactly which ring I am wanting from your website - if I was to pop down to your shop in Birmingham - would I be able to select it and pick it up there and then? Or is it a waiting process days/weeks?',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-15 23:11:54',
            'updated_at' => '2022-06-15 23:11:54',
        ),
        45 => 
        array (
            'id' => 121,
            'title' => 'Oliver Relton',
            'email' => 'oliver.relton12658@gmail.com',
            'phone' => '09330442113',
            'description' => 'Hello,

How are you? Hope you are fine.

I have been checking your website quite often. It has seen that the main keywords are still not in the top 10 positions in Google Search. You know things about working; I mean the procedure of working has changed a lot.

So I would like to have opportunity to work for you and this time we will bring the keywords to the top 10 spots with guaranteed period.

There is no wonder that it is possible now cause, I have found out that there are few things that need to be done for better performances (Some of them we will discuss in this email). Let me tell you some of them -

1. Title Tag Optimization
2. Meta Tag Optimization (Description, keyword and etc)
3. Heading Tags Optimization
4. Targeted keywords are not placed into tags
5. Alt / Image tags Optimization
6. Google Structured Data is missing
7. Custom 404 Page is missing
8. The Products are not following Structured markup data
9. Website Loading Speed Development (Both Mobile and Desktop)
10.Off –Page SEO work

Lots are pending……………..

You can see these are the things that need to be done properly to make the keywords others to get into the top 10 spots in Google Search & your sales Increase.


Sir/ Madam, please give us a chance to fix these errors and we will give you rank on these keywords.

Please let me know if you encounter any problems or if there is anything you need. If this email has reached you by mistake or if you do not wish to take advantage of this advertising opportunity, please accept my apology for any inconvenience caused and rest assured that you will not be contacted again.

Many thanks for your time and consideration,

Looking forward

Regards

Oliver Relton

If you do not wish to receive this again, please reply with "unsubscribe" in the subject line.',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-20 16:51:55',
            'updated_at' => '2022-06-20 16:51:55',
        ),
        46 => 
        array (
            'id' => 122,
            'title' => 'Jenna gonzaga',
            'email' => 'jennagonzaga@hotmail.com',
            'phone' => '07771359416',
            'description' => 'Hi, I am looking for a lab grown marquise 3.5/4 ct D-F, VVS1 max, excellent/VG cut, what would your price for something like this be please',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-20 16:56:28',
            'updated_at' => '2022-06-20 16:56:28',
        ),
        47 => 
        array (
            'id' => 123,
            'title' => 'anthea owen',
            'email' => 'a.owen.pcc@outlook.com',
            'phone' => '07444164668',
            'description' => 'Good afternoon
I am looking for a double or treble row diamond  wedding band',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/product/wed018',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-22 17:19:56',
            'updated_at' => '2022-06-22 17:19:56',
        ),
        48 => 
        array (
            'id' => 124,
            'title' => 'Martin Newman',
            'email' => 'martinnewman41@gmail.com',
            'phone' => '07870749761',
        'description' => 'Hi,  I brought my wife\'s engagement rig, our wedding rings and my wife\'s eternity rings from you guys...the engagement ring 10 years ago.  Unfortunately the engagement ring has split at the part of the band opposite the diamond, it\'s a clean break and looks almost as though it\'s where a previous join had been made.  I\'m really struggling to get to you guys for repair.  Is there a way I could post the ring to you, you guys quote (I guess the guarantee is out), then I pay and you send back...or if I can\'t afford the repair that I pay for return postage.  All recorded, signed for of course? 
Regards,

Martin',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-23 18:54:37',
            'updated_at' => '2022-06-23 18:54:37',
        ),
        49 => 
        array (
            'id' => 125,
            'title' => 'Tracey Bassett',
            'email' => 'b45set@yahoo.co.uk',
            'phone' => '07921139936',
            'description' => 'Hi
I purchased 0.9 carat diamond stud ear rings in March, which I flew from Belfast especially to purchase.   The stems have bent and are causing one stud to droop.  I’m interested in having a thicker stem & screw butterfly put on the ear rings?  Please can you contact me to advise what to do?',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-27 10:33:01',
            'updated_at' => '2022-06-27 10:33:01',
        ),
        50 => 
        array (
            'id' => 126,
            'title' => 'Jeremy',
            'email' => 'oakfield15@hotmail.com',
            'phone' => '07976256547',
            'description' => 'Hi
I came in on Saturday to look for an engagement ring for my partner and saw a couple that I think she would like. Can I please ask what you return policy is just in case she doesn’t like it, I can see that you have a 30 day return policy for online orders but couldn’t find any thing for shop purchase’s. 
Many thanks
Jeremy',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-27 22:21:08',
            'updated_at' => '2022-06-27 22:21:08',
        ),
        51 => 
        array (
            'id' => 127,
            'title' => 'Jordan Green',
            'email' => 'jordanashleygreen@hotmail.com',
            'phone' => '07793197665',
            'description' => 'Appointment for 20/08/2022 in the evening please',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/product/athena',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-28 22:19:13',
            'updated_at' => '2022-06-28 22:19:13',
        ),
        52 => 
        array (
            'id' => 128,
            'title' => 'Oliver Relton',
            'email' => 'oliver.relton12658@gmail.com',
            'phone' => '09330442148',
            'description' => 'Hello,

How are you? Hope you are fine.

I have been checking your website quite often. It has seen that the main keywords are still not in the top 10 positions in Google Search. You know things about working; I mean the procedure of working has changed a lot.

So I would like to have opportunity to work for you and this time we will bring the keywords to the top 10 spots with guaranteed period.

There is no wonder that it is possible now cause, I have found out that there are few things that need to be done for better performances (Some of them we will discuss in this email). Let me tell you some of them -

1. Title Tag Optimization
2. Meta Tag Optimization (Description, keyword and etc)
3. Heading Tags Optimization
4. Targeted keywords are not placed into tags
5. Alt / Image tags Optimization
6. Google Structured Data is missing
7. Custom 404 Page is missing
8. The Products are not following Structured markup data
9. Website Loading Speed Development (Both Mobile and Desktop)
10.Off –Page SEO work

Lots are pending……………..

You can see these are the things that need to be done properly to make the keywords others to get into the top 10 spots in Google Search & your sales Increase.


Sir/ Madam, please give us a chance to fix these errors and we will give you rank on these keywords.

Please let me know if you encounter any problems or if there is anything you need. If this email has reached you by mistake or if you do not wish to take advantage of this advertising opportunity, please accept my apology for any inconvenience caused and rest assured that you will not be contacted again.

Many thanks for your time and consideration,

Looking forward

Regards

Oliver Relton

If you do not wish to receive this again, please reply with "unsubscribe" in the subject line.',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-30 12:47:46',
            'updated_at' => '2022-06-30 12:47:46',
        ),
        53 => 
        array (
            'id' => 129,
            'title' => 'Henry Jinman',
            'email' => 'henryjinman@gmail.com',
            'phone' => '07545898120',
            'description' => 'Interested in a multi-stone engagement ring of diamonds and pink sapphires. Thinking a trilogy with a yellow gold band. Interested to understand the process more and get some advice.  Good availability to visit over next 5 days.',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/product/bianca',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-06-30 18:51:13',
            'updated_at' => '2022-06-30 18:51:13',
        ),
        54 => 
        array (
            'id' => 130,
            'title' => 'Tracy Lappin',
            'email' => 'tracy.lappin@yahoo.co.uk',
            'phone' => '07856016819',
            'description' => 'Hi 

My partner Purchased diamond earrings from you.  I lost one & came in and you matched them up and I purchased a replacement one.  The replacement earring (leg of the earring) is not long enough in ear.',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-01 01:37:09',
            'updated_at' => '2022-07-01 01:37:09',
        ),
        55 => 
        array (
            'id' => 131,
            'title' => 'Catherine Edens',
            'email' => 'catherineedens@yahoo.co.uk',
            'phone' => '07480700875',
            'description' => 'Hi, Im looking to buy 2 wedding bands. If we come into the shop can these be made the same day? Or will we need to come in to order and then come back to collect them - thank you',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-01 12:54:55',
            'updated_at' => '2022-07-01 12:54:55',
        ),
        56 => 
        array (
            'id' => 132,
            'title' => 'Laura',
            'email' => 'lauraapayne31@gmail.com',
            'phone' => '07841759607',
            'description' => 'Hi, 
What are you opening days/times? 
And how much in advance would we need to buy wedding rings. We get married on 3rd September. 

Thanks 

Laura',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-01 21:36:12',
            'updated_at' => '2022-07-01 21:36:12',
        ),
        57 => 
        array (
            'id' => 133,
            'title' => 'Hermy Skew',
            'email' => 'hermycastelino@gmail.com',
            'phone' => '07976548411',
            'description' => 'Would like to view ring WED017 in yellow gold. Do not know ring size. Looking to drop in on 05.07.22 at around10am.',
            'custom_url' => 'https://marlows-diamonds.co.uk/product/wed017',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-02 01:13:56',
            'updated_at' => '2022-07-02 01:13:56',
        ),
        58 => 
        array (
            'id' => 134,
            'title' => 'kenny johnston',
            'email' => 'cotneyfarmer@hotmail.com',
            'phone' => '07769221126',
            'description' => 'Hi I saw a ring today that I liked the look of . Ref. 61070602 which was a sapphire ring for £940 and was wondering if there was any negotiation on the price',
            'custom_url' => 'https://www.marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-03 03:12:17',
            'updated_at' => '2022-07-03 03:12:17',
        ),
        59 => 
        array (
            'id' => 135,
            'title' => 'Janine Bellamy',
            'email' => 'janinepaula82@hotmail.com',
            'phone' => '07917711369',
            'description' => 'Hi, I was just wondering if you buy jewellery? I’m looking to sell a ring. Many thanks',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-05 00:26:18',
            'updated_at' => '2022-07-05 00:26:18',
        ),
        60 => 
        array (
            'id' => 136,
            'title' => 'Rachel Patterson',
            'email' => 'racpat@outlook.com',
            'phone' => '07711781496',
            'description' => 'Looking for an appointment on Saturday please for engagement rings',
            'custom_url' => 'https://marlows-diamonds.co.uk/product/annie',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-05 23:48:32',
            'updated_at' => '2022-07-05 23:48:32',
        ),
        61 => 
        array (
            'id' => 137,
            'title' => 'Anthony Hobson',
            'email' => 'anthonyhobson@hotmail.co.uk',
            'phone' => '07917872272',
            'description' => 'Hi there, 

I was wondering if you could help, I go away with my wife and son on our first family holiday in Oct. It’s my wife’s birthday and our 7th wedding anniversary while we are away. 

I’m wanting to get her a nice eternity ring with a little band of diamonds without her knowing, in platinum finish. I was going to try and get down to Birmingham over the next few months but don’t think it will be possible without her knowing and want it as a surprise when we go away.

We bought both engagement and wedding rings from yourselves. 

I’ve got an image of her current rings and all her paperwork, what information do you need for the size?

Thanks in advance for your help.
Regards 

Anthony Hobson 
Sheffield',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-09 18:39:30',
            'updated_at' => '2022-07-09 18:39:30',
        ),
        62 => 
        array (
            'id' => 138,
            'title' => 'Louise',
            'email' => 'louisesm3@hotmail.com',
            'phone' => '07894150497',
            'description' => 'Hi
We would like to bring our rings in for cleaning on Saturday.  Are we able to collect the same day as we don\'t live locally?',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-11 18:47:57',
            'updated_at' => '2022-07-11 18:47:57',
        ),
        63 => 
        array (
            'id' => 139,
            'title' => 'Christopher Khoo',
            'email' => 'cskhoo4@gmail.com',
            'phone' => '07827275735',
            'description' => 'Hi
I like the Maya design but would want a lab diamond around 0.8-1 carat with VSI or better. Can this be done? 
https://marlows-diamonds.co.uk/product/maya',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-12 03:48:08',
            'updated_at' => '2022-07-12 03:48:08',
        ),
        64 => 
        array (
            'id' => 140,
            'title' => 'David Allen',
            'email' => 'davidjohnallen@hotmail.com',
            'phone' => '07733116768',
            'description' => 'I would like to look at eternity rings.',
            'custom_url' => 'https://marlows-diamonds.co.uk/product/et114',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-12 21:51:09',
            'updated_at' => '2022-07-12 21:51:09',
        ),
        65 => 
        array (
            'id' => 141,
            'title' => 'Sharan',
            'email' => 'sharan_dhaliwal98@hotmail.co.uk',
            'phone' => '07577739813',
            'description' => 'Hi I would like to make an appointment',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-15 18:38:14',
            'updated_at' => '2022-07-15 18:38:14',
        ),
        66 => 
        array (
            'id' => 142,
            'title' => 'Rebeca',
            'email' => 'rgarciaron@gmail.com',
            'phone' => '07738706968',
            'description' => 'Hi, I bought an engagement ring and in the past you have given me valuation for the insurance.  Unfortunately, I cannot find previous year’s valuation, please could you help?
Additionally I would like to buy an eternity ring, how can I measure my ring size and could you send it by post?  I live in Manchester.
Thanks, Rebeca',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-16 01:36:43',
            'updated_at' => '2022-07-16 01:36:43',
        ),
        67 => 
        array (
            'id' => 143,
            'title' => 'Emma lalor',
            'email' => 'e.lalor@outlook.com',
            'phone' => '07568077359',
            'description' => 'Hello,

I placed an order on Saturday regarding an engagement ring that I am collecting on 26th July. Please can somebody contact me regarding this. 

Many thanks,
Emma',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-19 17:04:06',
            'updated_at' => '2022-07-19 17:04:06',
        ),
        68 => 
        array (
            'id' => 144,
            'title' => 'Leah Richmond',
            'email' => 'leahasmith@hotmail.com',
            'phone' => '07947102165',
            'description' => 'Hello!

We bought my engagement ring from yourselves a while ago and it’s due for its check/clean and insurance valuation. I was wondering if this could be done on 30 Jul when we are visiting family?

Kind regards

Leah',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-21 01:18:57',
            'updated_at' => '2022-07-21 01:18:57',
        ),
        69 => 
        array (
            'id' => 145,
            'title' => 'sonia',
            'email' => 'sonia.riacube@gmail.com',
            'phone' => '0000000000',
            'description' => 'Hello, I found your website on the internet and it’s my pleasure to invite you to ”Submit Your Business Website” at Zero Cost on our portal https://BananaDirectories.com and float your business name, details and website link in-front of 1000s of visitors.

https://BananaDirectories.com is secured with a valid SSL Certificate. We offer free local business listings, city & country based business listings. BANANA DIRECTORIES is a famous business listing directory in     United States,     Belgium,     Canada,     India,     Germany,     United Kingdom,     Australia,     Singapore     and     New Zealand.',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-22 20:37:06',
            'updated_at' => '2022-07-22 20:37:06',
        ),
        70 => 
        array (
            'id' => 146,
            'title' => 'Kristina',
            'email' => 'yourdomainguru.tina103@gmail.com',
            'phone' => '1378945601',
            'description' => 'Hello, my name is Kristina from TDS. We have a domain that is currently on sale that you might be interested in - EngagementRingStores.com

Anytime someone types Engagement Ring Stores, Engagement Ring Stores Near Me, The Best Engagement Ring Stores, or any other phrase with these keywords into their browser, your site could be the first they see!

The internet is the most efficient way to acquire new customers

Avg Google Search Results for this domain is: 47,900,000
You can easily redirect all the traffic this domain gets to your current site!

EstiBot.com appraises this domain at $1,300. 

Priced at only $998 for a limited time! If interested please go to EngagementRingStores.com and select Buy Now.  
Act Fast! First person to select Buy Now gets it!  

Thank you very much for your time.
Top Domain Sellers (TDS)
Kristina Tabuelog',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-23 19:52:57',
            'updated_at' => '2022-07-23 19:52:57',
        ),
        71 => 
        array (
            'id' => 147,
            'title' => 'Emma roffey',
            'email' => 'mrsejroffey@yahoo.com',
            'phone' => '078746112132',
            'description' => 'Appalled at your store after visiting today.  We saw a ring on your website. I called and enquired about it and although advised my size would need to be ordered I could view and see in store 

We traveled over an hour to visit today.  I’m sure the woman who dealt with us either had no clue or wasn’t interested 

The ring I asked about was not available to view. No option shown of similar.  Just quoted that you don’t carry 9ct gold and what’s on website is not always what’s in store.  

Bianca trilogy at £772 with lab diamond became a £7000 option only with her 

We walked out!  Further down the road we found a mined diamond and they are putting a new shank on at no extra cost to fit and will be ready Tuesday!! 

Too much flouncing around and not enough proper customer service',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-23 20:51:34',
            'updated_at' => '2022-07-23 20:51:34',
        ),
        72 => 
        array (
            'id' => 148,
            'title' => 'Mark',
            'email' => 'markdougan@gmx.com',
            'phone' => '07940000000',
        'description' => 'Good Morning. I’m interested in your lab grown selection of wedding rings ladies J- (US5) that are in stock. Thank you Mark',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-24 14:48:44',
            'updated_at' => '2022-07-24 14:48:44',
        ),
        73 => 
        array (
            'id' => 149,
            'title' => 'Tim Durkin',
            'email' => 'tim.durkin@hotmail.co.uk',
            'phone' => '07885205689',
            'description' => 'Hi there, I’m after an engagement ring to propose end of august? I have a picture of a ring my partner liked from a year ago and wondered if you have something similar?',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-25 01:03:14',
            'updated_at' => '2022-07-25 01:03:14',
        ),
        74 => 
        array (
            'id' => 150,
            'title' => 'Ella Beagley',
            'email' => 'ellabeagley@gmail.com',
            'phone' => '07931241075',
            'description' => 'Hello, 
Thomas Ashley purchased a ring from your Birmingham store on 12th March 2022 that had been kept in a safe until my engagement last week. I have been noticing that the diamond is sitting at a bit of a slant when viewed from the side and one of the prongs holding the diamond looks different to all the others and sticks out more at the top. I am unsure whether these were done for a reason and I would like the ring to be looked at in store before any possible alterations are made, but I am just wondering whether this would come under the warranty? I do have some pictures that show these so please let me know if you would like me to send them to you. 
I am unsure what information from the documents you need but the order number is 19151 and the order was taken by Alison.
I look forward to hearing back from you, 
Ella Beagley.',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-25 02:24:30',
            'updated_at' => '2022-07-25 02:24:30',
        ),
        75 => 
        array (
            'id' => 151,
            'title' => 'Paul Johnson',
            'email' => 'paul.johnson807@talktalk.net',
            'phone' => '01869338275',
            'description' => 'Hi,

We have bought various items of jewellery from you over the years.  if I provide you with the valuation certs are you able to re-value.  My insurance company uses replacement cost for jewellery and not he formal retail valuation.  So I guess I need a trade valuation. 

I know prices have risen a fair bit recently so checking we have enough cover in place.

I seem to recall that Marlows would refresh the valuations if requested provided we had purchased the item from them...I might be wrong.  

Regards,
Paul',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-25 16:09:08',
            'updated_at' => '2022-07-25 16:09:08',
        ),
        76 => 
        array (
            'id' => 152,
            'title' => 'Amanda Murphy',
            'email' => 'amandamurphy@centralbank.ie',
            'phone' => '00353872957556',
        'description' => 'hi team, my sister and her husband got their engagement ring with you, i just got engaged and would love to get a quote for a ring as we live in Dublin but are considering flying over to you. We would be looking for a 1carat, lab grown, halo with slightly square shape (not round setting), VVS1. Look forward to hearing from you.
Amanda',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-26 20:59:39',
            'updated_at' => '2022-07-26 20:59:39',
        ),
        77 => 
        array (
            'id' => 153,
            'title' => 'Tom Carter',
            'email' => 'tacarter2009@gmail.com',
            'phone' => '07814510166',
            'description' => 'I’m in Birmingham on Tuesday 2nd August. Would be great if I could tie in that visit with an appointment with you. Cheers',
            'custom_url' => 'https://marlows-diamonds.co.uk/product/aurora',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-26 21:12:32',
            'updated_at' => '2022-07-26 21:12:32',
        ),
        78 => 
        array (
            'id' => 154,
            'title' => 'Humdeep Mahi',
            'email' => 'hmahi1990@gmail.com',
            'phone' => '07983626240',
            'description' => 'Thoughts are to look at an oval or solitaire diamond, gold band with a hidden halo. Something similar would also be interesting.',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-27 19:46:14',
            'updated_at' => '2022-07-27 19:46:14',
        ),
        79 => 
        array (
            'id' => 155,
            'title' => 'Tom Cope',
            'email' => 'tomcope1889@gmail.com',
            'phone' => '+447807901308',
            'description' => 'Hi, not sure if you are able to just walk in, so thought I would request an appointment, hopefully this Saturday?',
            'custom_url' => 'https://marlows-diamonds.co.uk/product/ariana',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-27 21:49:28',
            'updated_at' => '2022-07-27 21:49:28',
        ),
        80 => 
        array (
            'id' => 156,
            'title' => 'Anne Corless',
            'email' => 'annecorless@yahoo.co.uk',
            'phone' => '07956088966',
            'description' => 'We bought my ring, plus other jewellery, from you 8 years ago. I have had it serviced a few times but I feel one of the claws on one of the diamonds has worn . Can I bring it in to be looked at?',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-27 23:19:11',
            'updated_at' => '2022-07-27 23:19:11',
        ),
        81 => 
        array (
            'id' => 157,
            'title' => 'Jonathan Spencer',
            'email' => 'jspencer_12@hotmail.co.uk',
            'phone' => '07584352699',
            'description' => 'Hi

I\'d like some advice/quotes for an oval solitaire ring size I.

I\'m looking for around the carat mark and preferably between £4k - £5k.

What I\'m not really sure on is where the money is best put in terms of quality of the 4 C\'s. In reality is anyone going to notice the difference between SI1 and SI2 for example...

Email response would be appreciated.

Thanks

Jon',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-29 16:39:50',
            'updated_at' => '2022-07-29 16:39:50',
        ),
        82 => 
        array (
            'id' => 158,
            'title' => 'Lauren Ford',
            'email' => 'lauren.ford1@icloud.com',
            'phone' => '07593323505',
            'description' => 'Hi, I am enquiring about having my engagement ring cleaned, as I am due to get married next week. When my partner and I chose our wedding rings we asked about this and the lady who served us, said to contact the shop a week before and bring my warranty paperwork. However we have just moved house and I cannot find the paperwork for my ring. Am I still able to have my ring cleaned? Thanks Lauren',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-07-31 00:43:55',
            'updated_at' => '2022-07-31 00:43:55',
        ),
        83 => 
        array (
            'id' => 159,
            'title' => 'Fenella Mott',
            'email' => 'fenellamott@hotmail.co.uk',
            'phone' => '07852588994',
            'description' => 'Hi There,

Hope you are well. 

I was wondering whether I could book a clean for my engagement ring for this Saturday afternoon at about 4pm? 

Thanks,
Fenella',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-02 12:00:09',
            'updated_at' => '2022-08-02 12:00:09',
        ),
        84 => 
        array (
            'id' => 160,
            'title' => 'Rachel Hamer',
            'email' => 'rachelhamer@outlook.com',
            'phone' => '07887520765',
            'description' => 'Are you open on sundays?',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-02 15:18:17',
            'updated_at' => '2022-08-02 15:18:17',
        ),
        85 => 
        array (
            'id' => 161,
            'title' => 'amelia jack',
            'email' => 'ameliajack1214@gmail.com',
            'phone' => '3445465667',
            'description' => 'Hi,
I am a professional Blogger and Link Builder.

I do not want to waste your time.
Link building by guest posting helps to boost your site traffic and enhances sales. 
I have some High DA and High Traffic sites, which grow your Business very fast…

I know your time is very valuable, so please check these sites and reply to me soon as

possible I am waiting for your Respectful Answer


Sites                                           Traffic           Da                         

www.bestproductlists.com                       112k                68       
www.whatsontech.com                            16.8k               46
www.revoada.net                                21.7k               34
www.suntrics.com                               11.8k               25
www.lifeinsaudiarabia.net                      20.1k               36
www.bodhizazen.net                             76.3k               47
www.techninjapro.com                           18.4k               36                     
www.activerain.com                             75.5k               75
www.barbaraiweins.com                          9.37k               50
www.mymmanews.com                              36.4k               58
www.good-name.org                              49.6k               38
www.imcgroup.com                               36.5k               72
www.realtytimes.com                            20.3k               59                         
www.marketbusinessnews.com                     375k                63
www.artdaily.com                               19.2k               66
www.getblogo.com                               21.7k               43
www.thatericalper.com                          32.7k               59
www.vanessahudgensofficial.com                 21.3k               47
www.itigic.com                                 51.7k               46
www.thedesigninspiration.com                   10.7k               59
wwwexpressdigest.com                           278k                50
Websites                                   DA                Traffic
https://www.buzzfeed.com/                  93                131M
https://www.jpost.com/                     90                10.1M
https://www.business2community.com/        86                1.52M
https://www.techtimes.com/                 83                1.48M
https://filmdaily.co/                      59                2.43M
https://bmmagazine.co.uk/                  65                104K
https://www.natureworldnews.com/           72                42.7K
https://activerain.com/                    75                513K
https://www.giantbomb.com/                 87                4.59M
https://github.com/                        96                540M
https://www.bloglovin.com/                 93                1.13M
https://www.marketwatch.com/                         92           75         87   
https://goodmenproject.com/                          81           61         19.6K 
https://medium.com/                                  96           81         134
https://www.houzz.com/                               90           75         6.23M
https://www.architectureartdesigns.com/              70           56         190k
https://activerain.com/                              68           63         70.3k
https://network.aia.org/                             68           44         103k
https://www.houzz.co.uk/                             62           55         26.2k
https://realtytimes.com/                             60           57         11.9k
https://www.thepinnaclelist.com/                     59           47         1.87k
https://www.thepinnaclelist.com/                     59           47         2.42k
https://www.homecrux.com/                            58           54         35.8k
https://www.houzz.com.au/                            56           53         23.7k
https://thefrisky.com/                               82           55         23.5K
https://theisozone.com/                              62           49         20.2M
https://www.officialroyalwedding2011.org/            65           57         1.26M
https://inserbia.info/                               65           46         2.68M
https://demotix.com/                                 66           52         69.5K
https://www.imagup.com/                              72           55         127K
https://www.hiboox.com/                              78           57         452K
https://www.fotolog.com/                             85           67         43.4K     
https://nouw.com/                                    62           58         507K         
https://www.goodnewsnetwork.org/                     80           61         16.6K   
https://instablogs.com/                              52           44         4.17M
https://thetab.com/                                  77           54         2.61K
https://www.bloglovin.com/                           93           76         155K 
https://www.activerain.com/                          69           63         29.0K
http://magazine.epizy.com/                           64           34         307K
https://www.berkeley.edu/                            93           76         810
https://www.thefashionisto.com/                      70           58         48.7K
https://www.chartattack.com/                         63           56         197K
https://twin-cities.umn.edu/                         91           69         860
http://www.mit.edu/                                  93           77         419
https://www.blogger.com/                             99           57         10.1K
https://issuu.com/                                   94           82         2.75K
https://www.strikingly.com/                          91           75         181K
http://marketoracle.co.uk/                           67           50         503K
https://www.spaceflightinsider.com/                  74           47         167K
https://www.apsense.com/                             76           61         756K
http://www.imfaceplate.com/                          55           60         4.75M
https://www.bmmagazine.co.uk/                        61           55         77.5K
https://www.bloglovin.com/                           93           71         155K
https://renovate.home.blog/                          78           39         16.4K
https://ourliving.home.blog/                         78           39         16.4K
https://mycustom.home.blog/                          78           39         16.4K
https://aboutmanchester.co.uk/                       49           41         606K
http://publish.lycos.com/                            92           63         57.6K
https://www.thelondoneconomic.com/                   71           47         182K
https://www.nagpurtoday.in/                          53           51         685K
https://www.nyoooz.com/                              57           47         729K
https://www.worldoffemale.com/                       51           54         36.0K
https://www.tgdaily.com/                             75           60         864K
https://thinkcomputers.org/                          59           46         76.9K
https://edublogs.org/                                77           81         34.5K
https://fabnewz.com/                                 49           46         4.73M
https://www.digitaltrends.com/                       92           70         161
https://www.tagworld.com/                            51           49         3.27M
https://www.culturebully.com/                        50           51         5.49M
https://www.playbuzz.com/                            91           37         6.18K
https://www.stayful.com/                             49           39         1.67M
https://www.coversresource.com/                      30           39         23.5M
https://www.neighborgoods.net/                       56           50         4.19M
https://www.worldmeeting2015.org/                    56           49         9.7M
https://www.myzeo.com/                               56           53         1.71M
https://www.thetechblock.com/                        58           48         6.39M
https://www.wikileaks.info/                          58           51         5.33M
https://www.letsbegamechangers.com/                  59           50         1.31M
https://www.whenparentstext.com/                     49           47         3.02M
https://www.letsbegamechangers.com/                  59           59         1.31M
https://www.indyposted.com/                          52           50         2.68M
https://www.enterprisetimes.co.uk/                   54           43         9.41K
https://www.theandroidportal.com/                    42           41         2.99K   
https://electronichealthreporter.com/                42           41         187K
https://gstylemag.com/                               47           42         257K
https://cedcommerce.com/                             44           44         91.7K
https://businesstown.com/                            49           47         37.3K
https://www.techdonut.co.uk/                         45           37         669K
https://www.thefashionablehousewife.com/             44           58         358K
https://www.pixelspot.net/                           35           27         418K
https://www.savingadvice.com/                        67           57         91.7K
http://www.smallbizdaily.com/                        58           53         418K 
http://www.finsmes.com/                              59           54         119K
http://www.smallbizdaily.com/                        58           53         418K
https://www.pensacolavoice.com/                      66           38         66.0K  
https://www.techacrobat.com/                         33           35         200K
https://gadgetadvisor.com/                           39           41         313K
https://lazypenguins.com/                            47           52         192K   

Email ID ; ameliajack1214@gmail.com

Waiting your new order...
Thank you !',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-02 18:06:57',
            'updated_at' => '2022-08-02 18:06:57',
        ),
        86 => 
        array (
            'id' => 162,
            'title' => 'David',
            'email' => 'coach_davematt@hotmail.com',
            'phone' => '+447823443349',
            'description' => 'Hi,
What deposit % do you require for your products? I am specifically looking at engagement rings (and I will looking to be pay on finance)
Kind Regards,
David',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-02 20:37:22',
            'updated_at' => '2022-08-02 20:37:22',
        ),
        87 => 
        array (
            'id' => 163,
            'title' => 'Jordan Mayer',
            'email' => 'jordanmayer1993@hotmail.co.uk',
            'phone' => '07969819153',
            'description' => 'Hi, I\'m coming to Birmingham on 11th August to pick out my engagement ring with my fiancé. Do I need to make an appointment or can we just turn up? Thanks!',
            'custom_url' => 'https://marlows-diamonds.co.uk/product/cassidy',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-03 19:22:56',
            'updated_at' => '2022-08-03 19:22:56',
        ),
        88 => 
        array (
            'id' => 164,
            'title' => 'Aaron Timmis',
            'email' => 'timmis_26@hotmail.co.uk',
            'phone' => '07713455841',
            'description' => 'I have tried contacting you a couple of times now as I have purchased a ring from you for £2800 and I no longer need the ring. I asked about returning it and I was told you don\'t do returns but on your website it states you do a 3o day returns policy???? can someone please contact me and tell me what I can do. I would be happy if you were able to take the ring back and only refund me £2500 if possible.',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-04 18:09:10',
            'updated_at' => '2022-08-04 18:09:10',
        ),
        89 => 
        array (
            'id' => 165,
            'title' => 'Anna Williams',
            'email' => 'anna@blackbirdpackaging.co.uk',
            'phone' => '7749329939',
            'description' => 'Greetings!

I’m reaching out because it looks like your company`s jewelry looks Awesome, that’s wonderful!
I’m Anna with Blackbird Packaging.
We are one of the best packaging companies in the UK, known for the fastest lead times, free shipping, and premium quality and this time we are currently providing packaging for some major brands in the UK and USA.
We specialize in Custom Printing and Packaging for your products like: Earrings, Engagement Rings, Necklaces, Pendants and all Jewelry products on the Flat Card Boxes, Display Boxes and High Quality Gift Boxes.
We work on a Beat Your Quote policy to price our packaging lower than any current price you might have.
Check out our website for some samples:
https://blackbirdpackaging.co.uk/ 
Our MOQ is 250.
I’d love to see how we could work together. I can assure you won’t be disappointed with our pricing or quality.

Thank you!',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-04 22:08:56',
            'updated_at' => '2022-08-04 22:08:56',
        ),
        90 => 
        array (
            'id' => 166,
            'title' => 'Darren davies',
            'email' => 'djdavies1@gmail.com',
            'phone' => '07742176526',
            'description' => 'Hello we have bought 2 diamond wedding rings from you and a mans engagement ring, I want to get my husband a full eternity ring if I send you a picture could you give me a price on it.',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-05 03:02:34',
            'updated_at' => '2022-08-05 03:02:34',
        ),
        91 => 
        array (
            'id' => 167,
            'title' => 'Paulina Barcicka',
            'email' => 'paulina_barcicka@hotmail.com',
            'phone' => '07842037315',
            'description' => 'Hi, 
I am looking for an engagement ring with a lab grown diamond. Please share some information or how to proceed',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-05 15:51:35',
            'updated_at' => '2022-08-05 15:51:35',
        ),
        92 => 
        array (
            'id' => 168,
            'title' => 'Megan Bentham',
            'email' => 'meganbethjones@hotmail.com',
            'phone' => '07980569753',
            'description' => 'Hello, please can you let me know if you have a range of different stones available to view in store for engagement style rings - e.g emerald and aquamarine? Thanks',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-06 22:30:06',
            'updated_at' => '2022-08-06 22:30:06',
        ),
        93 => 
        array (
            'id' => 169,
            'title' => 'Sammy McKellar',
            'email' => 'sammy.mckellar@hotmail.com',
            'phone' => '07950272797',
            'description' => 'Hello, My Partner bought my engagement ring from you last year. I understand I am able to come and have this cleaned. The diamond has come a little bit loose and I was wondering if this can be dealt with when I book to get it cleaned or if I will need to sort this separately. Thank you,  Sammy',
            'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
            'is_deleted' => 0,
            'deleted_at' => NULL,
            'created_at' => '2022-08-08 16:44:12',
            'updated_at' => '2022-08-08 16:44:12',
        ),
        94 => 
        array (
            'id' => 170,
            'title' => 'Nicoletta Baranelli',
            'email' => 'nicoletta.baranelli@live.co.uk',
            'phone' => '07413773977',
        'description' => 'Hi there, I wondered if you make bespoke wedding bands to fit engagement rings? Looking forward to hearing from you. Thanks :)',
        'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
        'is_deleted' => 0,
        'deleted_at' => NULL,
        'created_at' => '2022-08-08 19:01:26',
        'updated_at' => '2022-08-08 19:01:26',
    ),
    95 => 
    array (
        'id' => 171,
        'title' => 'Nicoletta',
        'email' => 'nicolettabaranelli@live.co.uk',
        'phone' => '07413773977',
    'description' => 'Hi there, I wondered if you make bespoke wedding bands to fit engagement rings? Looking forward to hearing from you. Thanks :)',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-08 19:01:56',
    'updated_at' => '2022-08-08 19:01:56',
),
96 => 
array (
    'id' => 172,
    'title' => 'Katy Binks',
    'email' => 'katybinks92@gmail.com',
    'phone' => '07794888194',
    'description' => 'We bought my engagement ring from you 5 years ago and I’d like to have it cleaned due to a small piece of debris stuck between the band and stone. I am visiting this month from 22nd till 25th, would it be possible to have this done then? At what cost and how long would it take?
Many thanks,
Katy',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-09 02:51:17',
    'updated_at' => '2022-08-09 02:51:17',
),
97 => 
array (
    'id' => 173,
    'title' => 'Robert Rushton-Taylor',
    'email' => 'vt.rolyatreknit@bor',
    'phone' => '07544323919',
    'description' => 'Hello,

I\'m on the hunt for an engagement ring for my girlfriend.

Is there a good time to pop in and speak to you?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-09 17:05:01',
    'updated_at' => '2022-08-09 17:05:01',
),
98 => 
array (
    'id' => 174,
    'title' => 'Robert Rushton-Taylor',
    'email' => 'rrushtontaylor@gmail.com',
    'phone' => '07544323919',
    'description' => 'Hello,

I\'m on the hunt for an engagement ring for my girlfriend.

Is there a good time to pop in and speak to you?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-09 17:05:24',
    'updated_at' => '2022-08-09 17:05:24',
),
99 => 
array (
    'id' => 175,
    'title' => 'Julia',
    'email' => 'mrs.jkandrew@gmail.com',
    'phone' => '07984 466622',
    'description' => 'Hello, we happily bought our wedding rings from you 9 years ago. A gents platinum band and a ladies diamond channel set platinum band. However over the years mine is far too small now I sadly haven\'t worn it for about 3 years. We would both dearly love our wedding rings resized for our tenth anniversary. Also, I have a vintage and gold engagement ring which I also cannot wear as again its too small and the diamond needs resetting. Are these problems anything you can help us with please?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-09 23:03:31',
    'updated_at' => '2022-08-09 23:03:31',
),
100 => 
array (
    'id' => 176,
    'title' => 'Irfan Aslam',
    'email' => 'irfan-aslam@hotmail.co.uk',
    'phone' => '07531244730',
    'description' => 'Looking for an engagement ring, I like the emerald style diamond and want to look at a few options in person please.
I am free Thursday evening if that is doable?',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/harley',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-10 06:11:25',
    'updated_at' => '2022-08-10 06:11:25',
),
101 => 
array (
    'id' => 177,
    'title' => 'Andrew Pinder',
    'email' => 'mickandsharon66@yahoo.com',
    'phone' => '07989105356',
    'description' => 'Good morning 
I placed an order with you on 2 August (order # 31023). I received an email acknowledging the order and that I would receive an update within 72hrs. I have received no update as yet.',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-11 12:33:14',
    'updated_at' => '2022-08-11 12:33:14',
),
102 => 
array (
    'id' => 178,
    'title' => 'Tom Murrell',
    'email' => 'tompmurrell@gmail.com',
    'phone' => '07855066538',
    'description' => 'Hello, I purchased an engagement ring a few years back, I’m returning to look at some complementing diamonds for my partners 30th on 29th Aug.

I am looking at either round cut earrings, a pendant necklace or bracelet in white gold, around 1ct. 

Could I visit this coming Fri 19th between 10am-12pm? Many thanks',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/d-s019',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-13 04:17:26',
    'updated_at' => '2022-08-13 04:17:26',
),
103 => 
array (
    'id' => 179,
    'title' => '24242',
    'email' => 'cbuchanan@google.com',
    'phone' => '32423424242',
    'description' => 'hi',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/d-s007?carat=27&diamond_type=mined&gclid=Cj0KCQjwl92XBhC7ARIsAHLl9alljOWPsIG9FEGrhiTTj1RHGK7LPe5qWNWPLRVrdY_0yaOwbwzcccUaAmcyEALw_wcB&metal-type=18ct%20White%20Gold',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-13 21:23:57',
    'updated_at' => '2022-08-13 21:23:57',
),
104 => 
array (
    'id' => 180,
    'title' => 'POOJA MEHTA',
    'email' => 'poojamehta2009@yahoo.co.uk',
    'phone' => '07947310330',
    'description' => 'please call me regarding ring and earing',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-14 21:16:09',
    'updated_at' => '2022-08-14 21:16:09',
),
105 => 
array (
    'id' => 181,
    'title' => 'Ed Charles',
    'email' => 'edcharles21@icloud.com',
    'phone' => '0783817598',
    'description' => 'Hi, hope you’re well. I bought my wife’s engagement ring and wedding band 5 years ago and would like it cleaned. Do you still offer this service? Also, her engagement ring has become slightly misshaped, can this be dealt with at the same time. What is the process? Do I need to get it booked in with you? Or just drop it in when passing? Looking forward to hearing back. Ed and Jenny Charles',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-16 03:03:13',
    'updated_at' => '2022-08-16 03:03:13',
),
106 => 
array (
    'id' => 182,
    'title' => 'Harry Littlejohn',
    'email' => 'littlejohn100@hotmail.co.uk',
    'phone' => '07446171402',
    'description' => 'I would like an appointment at 2pm on Saturday 20th to view and discuss engagement ring options like this one',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/ariana',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-17 18:00:39',
    'updated_at' => '2022-08-17 18:00:39',
),
107 => 
array (
    'id' => 183,
    'title' => 'Harry Littlejohn',
    'email' => 'littlejohn100@hotmail.co.uk',
    'phone' => '07446171402',
    'description' => 'Saturday 20th at 2pm',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/ariana',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-17 18:14:26',
    'updated_at' => '2022-08-17 18:14:26',
),
108 => 
array (
    'id' => 184,
    'title' => 'Kevin Barry',
    'email' => 'Kevinjuniorbarbers@hotmail.com',
    'phone' => '07504148017',
    'description' => 'I\'m interested in the ring
Mens Diamond Wedding Ring | WED024

Is it possible for someone to what\'s app or email me a video of the ring for a clearer look.',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-17 20:16:25',
    'updated_at' => '2022-08-17 20:16:25',
),
109 => 
array (
    'id' => 185,
    'title' => 'Katie Rollin',
    'email' => 'katie.rollin@yahoo.com',
    'phone' => '07584035496',
    'description' => 'Please can you tell me if you are able to provide an updated valuation by email? We originally purchased the ring from you however we now live in the channel islands and need it updating for our home insurance application. I am in London this weekend if it would be better to take it there. Many thanks.',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-17 23:34:22',
    'updated_at' => '2022-08-17 23:34:22',
),
110 => 
array (
    'id' => 186,
    'title' => 'Luke Shanks',
    'email' => 'lukeshnks@googlemail.com',
    'phone' => '07930864267',
    'description' => 'Hi interested in purchasing an engagement ring. 

The Angel ring, 18carrot white cold, D, 0.5 diamond is likely the one but would be interested in discussing options',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/angel',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-18 13:34:13',
    'updated_at' => '2022-08-18 13:34:13',
),
111 => 
array (
    'id' => 187,
    'title' => 'Samantha Pullar',
    'email' => 'samanthapullar@hotmail.co.uk',
    'phone' => '07794814096',
    'description' => 'Hello, we bought my engagement ring from you in December and would both love to come and choose our wedding bands on November 14th / 15th. We loved the lady who served us, but I cannot recall her name! Will it be on our original purchase? The name was Christopher Lewis and we purchased the ring on Wednesday 22nd December.
Thanks',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/wedding_bands',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-19 14:14:00',
    'updated_at' => '2022-08-19 14:14:00',
),
112 => 
array (
    'id' => 188,
    'title' => 'Maureen O\'hagan',
    'email' => 'maureenmarie@outlook.com',
    'phone' => '07956188952',
    'description' => 'Do you do diamond letters, letter M',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-20 22:41:37',
    'updated_at' => '2022-08-20 22:41:37',
),
113 => 
array (
    'id' => 189,
    'title' => 'Samantha Allen',
    'email' => 's.allen23@hotmail.co.uk',
    'phone' => '07837079780',
    'description' => 'Hi, I purchased a titanium wedding band from you in 2013. My hands have changed since pregnancy and I’m unable to remove my wedding band. 
Do you offer a service to cut and remove the band and then resize? It’s a titanium band with diamond chips in. 
Many thanks 
Sam',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-22 17:50:51',
    'updated_at' => '2022-08-22 17:50:51',
),
114 => 
array (
    'id' => 190,
    'title' => 'Rohan Dholakia',
    'email' => 'rohan.narolagams@gmail.com',
    'phone' => '9316631777',
    'description' => 'i need to information about jewelry & diamond, Please send me whatsapp number',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-23 15:35:56',
    'updated_at' => '2022-08-23 15:35:56',
),
115 => 
array (
    'id' => 191,
    'title' => 'Safina sidat',
    'email' => 'safina.sidatmaster@gmail.com',
    'phone' => '07714745144',
    'description' => 'Hey, 

I wanted to enquire about trading in. I bought my rings from you 10 years ago. We are renewing our vows and are thinking about upgrading our rings. Do you trade in rings? 

Thanks

Safina',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-28 13:26:48',
    'updated_at' => '2022-08-28 13:26:48',
),
116 => 
array (
    'id' => 192,
    'title' => 'Natalie corrigan',
    'email' => 'natratcliffe@hotmail.com',
    'phone' => '07743788159',
    'description' => 'My engagement ring is a ring of yours and it has been stolen recently. The insurance company are looking to offer me a replacement and I wanted to know how much it would be to have a replacement from yourselves for a ring as close as possible to the one that has been taken- the GIA report reference is 6201740475. The engagement ring has a platinum claw set band of 0.39 and a matching platinum wedding band with a diamond weight of 0.33ct',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-31 01:32:36',
    'updated_at' => '2022-08-31 01:32:36',
),
117 => 
array (
    'id' => 193,
    'title' => 'Laura Drew',
    'email' => 'laurakincaid@hotmail.co.uk',
    'phone' => '07905851571',
    'description' => 'Hi, my husband bought my engagement ring from you. Please can it be services as in cleaned. A jewellery said it had been bent slightly out of alignment, so can this and the clasps be checked? Can we drop it off in London?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-31 19:02:18',
    'updated_at' => '2022-08-31 19:02:18',
),
118 => 
array (
    'id' => 194,
    'title' => 'Tom Hodgekins',
    'email' => 'tom.hodgekins@googlemail.com',
    'phone' => '07748984985',
    'description' => 'Hello there! Just a couple of quick questions for you:

1. Do you have to schedule an appointment to visit your shop in Birmingham?
2. What sort of lead times (as an average) are we looking at for engagement rings at this moment in time?

Many thanks!

Tom',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-08-31 21:25:41',
    'updated_at' => '2022-08-31 21:25:41',
),
119 => 
array (
    'id' => 195,
    'title' => 'Richard',
    'email' => 'Richardtimms66@gmail.com',
    'phone' => '07425282652',
    'description' => 'Can I make an appointment to view the Sydney engagement ring',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/sydney',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-01 23:01:31',
    'updated_at' => '2022-09-01 23:01:31',
),
120 => 
array (
    'id' => 196,
    'title' => 'Michael Williamson',
    'email' => 'michael@thewilliamsons.biz',
    'phone' => '07742232400',
    'description' => 'Hello,

I am looking for a GIA Natural Diamond Engagement Ring, M1/2 Platinum Band, VS2, Very Good.

I have seen the following:

https://marlows-diamonds.co.uk/product/madison

Can I have a viewing for this and similar engagement rings on Saturday 3rd September at 2.30pm?

Please confirm.

Many thanks,


Michael',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/madison',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-01 23:11:06',
    'updated_at' => '2022-09-01 23:11:06',
),
121 => 
array (
    'id' => 197,
    'title' => 'GURPREET Sahota',
    'email' => 'gksahota@hotmail.co.uk',
    'phone' => '07968490492',
    'description' => 'Appt for Friday 15th sept please',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/harley',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-02 12:18:21',
    'updated_at' => '2022-09-02 12:18:21',
),
122 => 
array (
    'id' => 198,
    'title' => 'Alex Soar',
    'email' => 'asoar90@gmail.com',
    'phone' => '07530509881',
    'description' => 'Looking for wedding rings for myself and partner. She is looking at rings with diamonds in the middle. I am looking at platinum rings. 
In Birmingham next weekend and looking to call in the 10th September in the morning. 
Previously bought and engagement ring from yourselves in February. 
Hope too see you soon! 
Cheers 
Alex',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/wed003',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-05 01:09:46',
    'updated_at' => '2022-09-05 01:09:46',
),
123 => 
array (
    'id' => 199,
    'title' => 'Sophie Clarke',
    'email' => 'sophie_louise_clarke@hotmail.co.uk',
    'phone' => '07933575663',
    'description' => 'Hi there I just wondered do you take old ring and melt them down to make a new ring?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-08 14:27:09',
    'updated_at' => '2022-09-08 14:27:09',
),
124 => 
array (
    'id' => 200,
    'title' => 'James Bennett',
    'email' => 'jamesdawsonbennett@yahoo.co.uk',
    'phone' => '07983667074',
'description' => 'Hi - I purchased a diamond engagement ring from you in January 2015. I am looking to sell it and I wanted to enquire as to whether you buy second hand jewellery (back).

Best Regards
James Bennett',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-10 15:48:20',
    'updated_at' => '2022-09-10 15:48:20',
),
125 => 
array (
    'id' => 201,
    'title' => 'Adrian Delacroix',
    'email' => 'delacroix.humphreys@gmail.com',
    'phone' => '+447469154293',
    'description' => 'I\'m interest in the diamond white gold pendent neckless. Do you have these aviable please.',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/ds018',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-11 18:53:56',
    'updated_at' => '2022-09-11 18:53:56',
),
126 => 
array (
    'id' => 202,
    'title' => 'Rohan Dholakia',
    'email' => 'rohan.narolagams@gmail.com',
    'phone' => '6354437961',
    'description' => 'I Am Rohan From Narola Diamond Pvt Ltd India, You Purchase A Diamond?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-12 13:37:03',
    'updated_at' => '2022-09-12 13:37:03',
),
127 => 
array (
    'id' => 203,
    'title' => 'Remy Cresswell',
    'email' => 'q_t_remz@hotmail.com',
    'phone' => '07875072016',
    'description' => 'Hi, 
Do you you buy back any jewellery? I have a platinum diamond ring, platinum 2.5mm wedding band and white gold ring I am looking to sell. I have all original paperwork and receipts',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-17 13:13:00',
    'updated_at' => '2022-09-17 13:13:00',
),
128 => 
array (
    'id' => 204,
    'title' => 'Tabassam',
    'email' => 'tnissa@hotmail.co.uk',
    'phone' => '07772037104',
    'description' => 'Can we buy your ring on finance',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-18 03:15:08',
    'updated_at' => '2022-09-18 03:15:08',
),
129 => 
array (
    'id' => 205,
    'title' => 'Michael',
    'email' => 'michaelellis1304@gmail.com',
    'phone' => '07885415169',
    'description' => 'Appointment in London shop please, next weekend.',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/nova',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-18 21:20:43',
    'updated_at' => '2022-09-18 21:20:43',
),
130 => 
array (
    'id' => 206,
    'title' => 'Shivani Rajani',
    'email' => 'shivani94@hotmail.co.uk',
    'phone' => '07866623817',
    'description' => 'Hi I’m looking with my boyfriend for an engagement ring an elongated cushion',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-18 22:15:48',
    'updated_at' => '2022-09-18 22:15:48',
),
131 => 
array (
    'id' => 207,
    'title' => 'sharon harrison',
    'email' => 'royalsilk@outlook.com',
    'phone' => '07968791752',
    'description' => 'I am looking for a price for top quality lab grown diamond around 5 carats must be round or cushion in shape and must be near colourless , cut to the highest standard for maximum brilliance and VS1 or VS2 in clarity. I would prefer an email with price and I will contact you if i decided to go ahead with purchase..',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-18 23:22:43',
    'updated_at' => '2022-09-18 23:22:43',
),
132 => 
array (
    'id' => 208,
    'title' => 'Lucy Elizabeth Smith',
    'email' => 'smithluce@aol.com',
    'phone' => '07710199936',
    'description' => 'Hello, 

My partner bought my engagement ring from you a few weeks ago, I need my ring to be resized. Would it be possible to arrange an appointment to do that please? We would also like to have a look at wedding bands. 

Thank you 
Lucy',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-19 17:08:29',
    'updated_at' => '2022-09-19 17:08:29',
),
133 => 
array (
    'id' => 209,
    'title' => 'Marcos Nunes',
    'email' => 'marcos_c_n@hotmail.com',
    'phone' => '07837069302',
    'description' => 'Looking for a simple and elegant engagement ring for my girlfriend and would love to visit to see your collection - specially interested in seeing PHOEBE | Classic Trilogy Style Twist Diamond Ring. Would like to arrange an appointment for the London location in the near future.
Kind regards.',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/phoebe',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-20 04:43:53',
    'updated_at' => '2022-09-20 04:43:53',
),
134 => 
array (
    'id' => 210,
    'title' => 'Anna Das',
    'email' => 'carranna@hotmail.co.uk',
    'phone' => '07988168327',
    'description' => 'Hi there, 
I’d like to find out about having a ring reset please. I have a beautiful solitaire diamond ring, from Marlows 10 years ago but it’s now too small. I also have a pair of diamond earrings from Marlows about 6/7 years ago and was wondering about combining them. All three diamonds are round. Please could you let me know roughly how much this would cost in a platinum setting. Also, please could you let me know what different setting are available for a three diamond arrangement - is it just ‘high set’ or are there any other styles?

Thanks very much for any advice.
Kind regards

Anna',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-21 17:46:19',
    'updated_at' => '2022-09-21 17:46:19',
),
135 => 
array (
    'id' => 211,
    'title' => 'Leigh Platnauer',
    'email' => 'leigh6513@hotmail.co.uk',
    'phone' => '07468478225',
'description' => 'I priced up a ring at Diamond Heaven and I’m looking to see (now I have the specification) what others can offer for the same price or spec. The details are; pear shaped yellow diamond, VS1 1.1 carat excellent symmetry excellent polish. Fitted into a plain slim platinum band. Thank you.',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-21 21:26:31',
    'updated_at' => '2022-09-21 21:26:31',
),
136 => 
array (
    'id' => 212,
    'title' => 'Joe',
    'email' => 'jdkaye13@gmail.com',
    'phone' => '0794978428',
    'description' => 'Hi, I bought my wife\'s engagment ring from you a few years ago. Do you do renew appraisals for insurance purposes? Is there a charge for that? I\'m also considering buying a diamond tennis bracelet. Do you have a selection that I can view? thanks, Joe',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-22 03:10:08',
    'updated_at' => '2022-09-22 03:10:08',
),
137 => 
array (
    'id' => 213,
    'title' => 'Blogs',
    'email' => 'shere2k7@hotmail.co.uk',
    'phone' => '00000000000',
    'description' => 'Unsubscribe me I dont want these emails',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-22 04:17:01',
    'updated_at' => '2022-09-22 04:17:01',
),
138 => 
array (
    'id' => 214,
    'title' => 'Toby Shaw',
    'email' => 'tobyshaw24@gmail.com',
    'phone' => '07572427089',
'description' => 'Hi - i am looking for an appointment to hopefully pick out an engagement ring. If there is a spare time slot would it be possible to get an appointment on 8th October (saturday)? Thanks - Toby',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/selena',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-22 15:26:05',
    'updated_at' => '2022-09-22 15:26:05',
),
139 => 
array (
    'id' => 215,
    'title' => 'Jonathan Hydon',
    'email' => 'jonathan_hydon@hotmail.com',
    'phone' => '07837376654',
    'description' => 'Hi, I’m interested in buying an engagement ring - platinum ring, Tyffany style solitaire, raised setting, 1.2-1.5ct. Could I arrange an appointment on Monday 26/9 afternoon to view your stock of diamonds to understand quality and price? Thank you. Jonathan',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-22 15:29:42',
    'updated_at' => '2022-09-22 15:29:42',
),
140 => 
array (
    'id' => 216,
    'title' => 'Jiat Maula',
    'email' => 'bobbyandhika@tinktank.biz',
    'phone' => '02088816479',
    'description' => 'Oke',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-22 20:14:36',
    'updated_at' => '2022-09-22 20:14:36',
),
141 => 
array (
    'id' => 217,
    'title' => 'Jiat Maula',
    'email' => 'bobbyandhika@tinktank.biz',
    'phone' => '02088816479',
    'description' => 'Oke',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-22 20:15:31',
    'updated_at' => '2022-09-22 20:15:31',
),
142 => 
array (
    'id' => 218,
    'title' => 'Sukh Jaswal',
    'email' => 'DVS_9_9@HOTMAIL.COM',
    'phone' => '07888666936',
    'description' => 'Hi, interested in some stud earrings for my wife and also cleaning her existing two rings which we have bought from yourselves in the past.',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/d-s022',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-22 20:45:44',
    'updated_at' => '2022-09-22 20:45:44',
),
143 => 
array (
    'id' => 219,
    'title' => 'Daniel Carrington',
    'email' => 'danielcarrington11@gmail.com',
    'phone' => '07557122984',
    'description' => 'Hi,

You most definitely get this a lot but I am going to propose to my girlfriend. I am thinking of visiting the Birmingham store this Friday, do I need to book an appointment or can I just walk in?

Thanks,
Dan',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-26 14:20:28',
    'updated_at' => '2022-09-26 14:20:28',
),
144 => 
array (
    'id' => 220,
    'title' => 'robert laverty',
    'email' => 'robert_laverty@hotmail.com',
    'phone' => '07713101335',
'description' => 'Hi I would like to make an appointment in London on 22 October around 1100 if possible? In particular to look at a bubble ring (with my wife)',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/quinn?diamond_type=mined&gclid=CjwKCAjw5s6WBhA4EiwACGncZdCqw4CGeoaHr5lWi9vsM-RRZcnOVSm2Nz-yBeHxQJMGvMuxk3BGWhoCUlUQAvD_BwE&metal-type=9ct%20White%20Gold&total-diamond-weight=0.85',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-26 23:10:30',
    'updated_at' => '2022-09-26 23:10:30',
),
145 => 
array (
    'id' => 221,
    'title' => 'Salete Tetai',
    'email' => 'sallyteta@hotmail.com',
    'phone' => '07958772164',
    'description' => 'I live in London I need a wedding ring for Saturday is possible?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-27 02:09:12',
    'updated_at' => '2022-09-27 02:09:12',
),
146 => 
array (
    'id' => 222,
    'title' => 'Rebecca Fishwick',
    'email' => 'rebeccafishwick28@gmail.com',
    'phone' => '07809429143',
'description' => 'Hello, my wedding ring is from you and it is now too big- is there anyway I can have it tightened without travelling to Birmingham (from near Reading)?
Many thanks, Rebecca',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-29 16:39:46',
    'updated_at' => '2022-09-29 16:39:46',
),
147 => 
array (
    'id' => 223,
    'title' => 'Stephanie Zoka',
    'email' => 'stephaniezoka@gmail.com',
    'phone' => '07598206828',
'description' => 'Hi - i bought my engagement (platinum single diamond) and wedding ring from you, ( plain platinum) but after my pregnancy it seems they don\'t fit anymore.  I\'m trying them every week to see if my fingers return to previous size, but if not, would we be able to bring them in for resizing? If so, can it be done same day? We don\'t live local.  They are also due an annual service which we haven\'t been back for since before covid. 
Thanks
Steph',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-09-30 16:02:19',
    'updated_at' => '2022-09-30 16:02:19',
),
148 => 
array (
    'id' => 224,
    'title' => 'Amy Cox',
    'email' => 'amyjones1985@gmail.com',
    'phone' => '07341945795',
    'description' => 'Hi 

My engagement ring and wedding ring were both from you. I need them re sizing. I’ve put on a bit of weight. I just wondered how long it takes to have the re sized and cleaned. There platinum. 

Thanks',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-01 06:57:09',
    'updated_at' => '2022-10-01 06:57:09',
),
149 => 
array (
    'id' => 225,
    'title' => 'Dario Schiano',
    'email' => 'dario.schianom@gmail.com',
    'phone' => '07490684248',
    'description' => 'Hello, I am looking for an engagement ring for my girlfriend, and I really like the Destiny design with the oval diamond and white gold. She would probably be a size N. I am also interested in a simple white gold ring for me, size O. I would like to visit your London store.

Thank you,

Dario',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/destiny',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-01 12:24:04',
    'updated_at' => '2022-10-01 12:24:04',
),
150 => 
array (
    'id' => 226,
    'title' => 'Helen Waters',
    'email' => 'helen.marketingagencyuk@gmail.com',
    'phone' => '02922747447',
    'description' => '"Hi,

My name is Helen and I’m a performance marketing specialist here in the UK. We’ve carried out some initial research on your website/sector and I noticed that your online visibility on search engines is lower than average for your sector.

With your permission I’d like to send you a free report showing you a few things you can do on your own (without needing to hire anyone) to greatly improve these search results for you. The report is very detailed and comes with its own detailed instructions. It will show you the current position of your website and how you can actually increase leads & sales through your website. So that your website reaches the rank that you deserve.

Would that be, okay? Again, this is completely free- no costs whatsoever just our way of making a super strong first impression as experts in E-Commerce marketing!

Please email us back for a free report.


Warm Regards,
Helen Waters
helen.marketingagencyuk@gmail.com
Marketing Account Manager




If you’re NOT interested, simply reply “NO” and I will not contact you again."',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-01 21:43:03',
    'updated_at' => '2022-10-01 21:43:03',
),
151 => 
array (
    'id' => 227,
    'title' => 'Alice Taylor',
    'email' => 'alicephoebetaylor@icloud.com',
    'phone' => '07919822254',
    'description' => 'Hi, I got given an engagement ring that was bought from you over 5 years ago. I’m looking to sell it. Do you buy back rings at all? Thanks so much for your help, Alice',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-02 15:03:03',
    'updated_at' => '2022-10-02 15:03:03',
),
152 => 
array (
    'id' => 228,
    'title' => 'Ana Lopes',
    'email' => 'ana.lurdeslopes2@gmail.com',
    'phone' => '07555203225',
    'description' => 'Good afternoon,
I have recently purchased an engagement ring that unfortunately needs resizing. Do I need to book an appointment to get this sorted or just pass by the store at some point ? 
Kind regards,
Ana Lopes',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-03 21:21:53',
    'updated_at' => '2022-10-03 21:21:53',
),
153 => 
array (
    'id' => 229,
    'title' => 'Ana Lopes',
    'email' => 'ana.lurdeslopes2@gmail.com',
    'phone' => '07555203225',
    'description' => 'Good afternoon,
I recently bought an engagement ring that unfortunately needs resizing. Does an appointment need to be made to get the ring resized ?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-03 21:23:07',
    'updated_at' => '2022-10-03 21:23:07',
),
154 => 
array (
    'id' => 230,
    'title' => 'ABHISHEK MISHRA',
    'email' => 'MISHRADABLU08@YAHOO.IN',
    'phone' => '+918849716913',
    'description' => 'Hello there,

Hope you\'re doing good, let me first appreciate the type of work at Marlows Diamonds you guys are doing also the market you cater is beyond imagination. 

Myself Abhishek. Over 20+ years of experience in Diamond industry gives me an edge over others I\'m happy to say I manage a team of diamond artisans who produce and make fine world class diamonds. 

I wish to work with Marlows Diamonds and offer our range of products to Marlows Diamonds. I also request you to take sometime and give us a visit at our India office and be our guest.

Meanwhile, Please let me know when can we connect, So I Could explain and give details description about our products. 

Thanks and regards
Abhishek Mishra 
+91-8849716913',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-04 13:45:14',
    'updated_at' => '2022-10-04 13:45:14',
),
155 => 
array (
    'id' => 231,
    'title' => 'Jonathan Addaih',
    'email' => 'Jonathanaddaih@outlook.com',
    'phone' => '07401069748',
    'description' => 'Can you please post my engagement ring Lab grown diamond Emerald cut 1.46ct, J/VS2 in an 18ct yellow gold diamond set halo setting, 0.29ct.  To 
8 Albury court, great holm, Milton Keynes, Mk8 9DT
Also confirm damage is accidental. Thanks',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-04 18:41:14',
    'updated_at' => '2022-10-04 18:41:14',
),
156 => 
array (
    'id' => 232,
    'title' => 'Aimee Davies',
    'email' => 'aimeedavies1512@gmail.com',
    'phone' => '07368194602',
    'description' => 'Dear Marlows, a number of years ago, my then husband and I paid a deposit for a ring and since made an additional payment. I believe the ring itself had to be released, but that you still had my money. Am I able to arrange return of this? I apologise about the delay, but I have had some terrible years in terms of mental health and separation. Kind regards, Aimee',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-05 15:02:08',
    'updated_at' => '2022-10-05 15:02:08',
),
157 => 
array (
    'id' => 233,
    'title' => 'Jenny Murphy',
    'email' => 'jenny_murphy_1@hotmail.com',
    'phone' => '07885407347',
    'description' => 'I’d like to view and choose a diamond',
    'custom_url' => 'https://marlows-diamonds.co.uk/live-diamond-search',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-07 19:42:51',
    'updated_at' => '2022-10-07 19:42:51',
),
158 => 
array (
    'id' => 234,
    'title' => ',Muriel Mustard',
    'email' => 'Mustardsantiques@icloud.com',
    'phone' => '07810877808',
    'description' => 'Would like to buy a large diamond not expensive just for  fun',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-09 15:39:44',
    'updated_at' => '2022-10-09 15:39:44',
),
159 => 
array (
    'id' => 235,
    'title' => 'Jennifer',
    'email' => 'jennifer.skelly3@mail.dcu.ie',
    'phone' => '07450217883',
    'description' => 'Hello, I’m hoping to visit your store in Birmingham  this Saturday. Do I need to make an appointment to look at engagement rings/ to design a bespoke ring or can I just turn up?

Thank you',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-11 23:26:56',
    'updated_at' => '2022-10-11 23:26:56',
),
160 => 
array (
    'id' => 236,
    'title' => 'Alex Green',
    'email' => 'alexandraabbotts@yahoo.co.uk',
    'phone' => '07581363924',
'description' => 'Hi - we brought my engagement ring from you in 2012/13 but something has happened to one of the claws - it feels really rough and is catching on fabrics (its a four claw ring and the diamond is set outside the band) - is this something you could investigate for me under the lifetime gurantee? Also i have a wedding ring and eternity ring from you - all three rings need cleaning - do i just bring them in? We\'re based near to your Birmingham store',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-12 16:12:41',
    'updated_at' => '2022-10-12 16:12:41',
),
161 => 
array (
    'id' => 237,
    'title' => 'Rose',
    'email' => 'rosie_jones91@hotmail.co.uk',
    'phone' => '07976890745',
    'description' => 'Hello,
We are looking to make an appointment for wedding bands for myself and my fiancé- he’s looking for a plain band with an engraving or
Print of a logo and we wondered whether that’s something you offer? and I like lots of the bands I’ve seen on the website, but wondered whether you can make them with lab created diamonds? 

We would like an appointment for Saturday 19th nov if you have any availability? 

Kind regards,
Rosie',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-13 00:46:10',
    'updated_at' => '2022-10-13 00:46:10',
),
162 => 
array (
    'id' => 238,
    'title' => 'Alexandra',
    'email' => 'alexandrapap21@gmail.com',
    'phone' => '07850102816',
    'description' => 'I’m looking for a solitaire gold necklace, with 1carat diamond or smaller, with outstanding 4c’s natural diamond and certified. Could you please give me a price estimate  and options to choose from?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-15 22:43:57',
    'updated_at' => '2022-10-15 22:43:57',
),
163 => 
array (
    'id' => 239,
    'title' => 'Naomi',
    'email' => 'nbayliss21@gmail.com',
    'phone' => '07964550884',
    'description' => 'How long would it take to make a custom made band? You previously made one during covid so not sure how long it would normally take?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-16 00:37:17',
    'updated_at' => '2022-10-16 00:37:17',
),
164 => 
array (
    'id' => 240,
    'title' => 'Matt',
    'email' => 'matteo.rattighieri@gmail.com',
    'phone' => '07464914750',
    'description' => 'Hi, I\'d like to request an appointment to see this diamond.',
    'custom_url' => 'https://marlows-diamonds.co.uk/live-diamond-search?gclid=Cj0KCQjw166aBhDEARIsAMEyZh5tGWldSyyYtNR_gTj3Gmuw-keMLbeACgfMPoNwHqoXOmapb3XH2ScaAp3EEALw_wcB',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-16 14:25:46',
    'updated_at' => '2022-10-16 14:25:46',
),
165 => 
array (
    'id' => 241,
    'title' => 'Matteo Rattighieri',
    'email' => 'matteo.rattighieri@gmail.com',
    'phone' => '07464914750',
    'description' => 'Hi, I\'d like to request an appointment to see this diamond.',
    'custom_url' => 'https://marlows-diamonds.co.uk/live-diamond-search?gclid=Cj0KCQjw166aBhDEARIsAMEyZh5tGWldSyyYtNR_gTj3Gmuw-keMLbeACgfMPoNwHqoXOmapb3XH2ScaAp3EEALw_wcB',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-16 14:27:08',
    'updated_at' => '2022-10-16 14:27:08',
),
166 => 
array (
    'id' => 242,
    'title' => 'Kristina ray',
    'email' => 'zillkristina1995@icloud.com',
    'phone' => '07359382400',
    'description' => 'Please can u call me I need to discuss a ring I bought its very important',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-18 00:36:32',
    'updated_at' => '2022-10-18 00:36:32',
),
167 => 
array (
    'id' => 243,
    'title' => 'Kristina ray',
    'email' => 'zillkristina1995@icloud.com',
    'phone' => '07359382400',
    'description' => 'Please call me back I need to discuss a ring I bought',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-18 00:37:29',
    'updated_at' => '2022-10-18 00:37:29',
),
168 => 
array (
    'id' => 244,
    'title' => 'charles',
    'email' => 'charles.newman@nhs.net',
    'phone' => '07774580080',
    'description' => 'hey, im looking for an engagement ring and was hoping to pop in for an appointment. do you have any availability for this sat by any chance?  Please may you text/ call me as opposed to e-mail? E-mails are all linked across the apple devices and dont want her to see ha

cheers

charles',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/eva',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-18 01:28:33',
    'updated_at' => '2022-10-18 01:28:33',
),
169 => 
array (
    'id' => 245,
    'title' => 'Simon Grove',
    'email' => 'sigrove77@gmail.com',
    'phone' => '07766005684',
    'description' => 'Hello, I purchase a diamond bracelet for my wife\'s 40th  from you last year but a bit of the fastener has broken off. Is there any chance we could bring it to you for a repair please?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-18 15:01:16',
    'updated_at' => '2022-10-18 15:01:16',
),
170 => 
array (
    'id' => 246,
    'title' => 'Gemma',
    'email' => 'mayled4@gmail.com',
    'phone' => '07712705460',
    'description' => 'Hi,

We ordered our wedding bands from you on 10/12/2021 however my husband has lost his. We have the invoice (12994) and the stock code 62010780 platinum 3mm 3.8g. Do you have another one I can order?',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-19 00:12:45',
    'updated_at' => '2022-10-19 00:12:45',
),
171 => 
array (
    'id' => 247,
    'title' => 'DEE SAHOTA',
    'email' => 'DSahota@Hotmail.com',
    'phone' => '07947864605',
    'description' => 'Looking for an engagement ring diamond',
    'custom_url' => 'https://marlows-diamonds.co.uk/live-diamond-search?gclid=CjwKCAjwwL6aBhBlEiwADycBIJhkB1W8YhixBx3wNxXt0gS4NWwfTOskwlVg-y2_g5Qoq9lHk3NwfRoCE5IQAvD_BwE',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-19 21:50:39',
    'updated_at' => '2022-10-19 21:50:39',
),
172 => 
array (
    'id' => 248,
    'title' => 'Derek Chen',
    'email' => 'chentongzhe@crysdiam.com',
    'phone' => '008615867265850',
    'description' => 'Dear Sir or Madam,                                                    Could you send this message to your purchase department?                                                                       
This is Derek from Ningbo Crysdiam Technology which is the largest CVD Lab-grown diamond grower in the World. It\'s glad to know that you are also in this business.As the largest CVD grower, we could provide you the best quality with most competitive price. Hope we can have a chance to talk with you.                       
Any question, feel free to contact me.              
Best regards',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-20 14:55:08',
    'updated_at' => '2022-10-20 14:55:08',
),
173 => 
array (
    'id' => 249,
    'title' => 'Joe Kidger',
    'email' => 'joekidger1994@gmail.com',
    'phone' => '07960054687',
    'description' => 'Hi, I would like to book an appointment to hopefully buy an engagement ring today? Would prefer email or text as contact over phone call. Thank you. Joe.',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/liv',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-22 17:48:14',
    'updated_at' => '2022-10-22 17:48:14',
),
174 => 
array (
    'id' => 250,
    'title' => 'Thomas Moreton',
    'email' => 't.s.moreton@gmail.com',
    'phone' => '07791860492',
    'description' => 'Hi, I’d like an appointment at your Birmingham store at about 11:30pm if possible',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/dylan',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-25 19:46:51',
    'updated_at' => '2022-10-25 19:46:51',
),
175 => 
array (
    'id' => 251,
    'title' => 'Debbie Collin',
    'email' => 'deborahjaynecollin@gmail.com',
    'phone' => '07813344686',
    'description' => 'Hello, my fiance bought my engagement ring from you earlier this year, and we\'re planning to come in on Sunday to look at some wedding rings with you. Would we need to book an appointment or can we just turn up? It will be around 2pm. Thanks! Debbie & Josh',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-26 23:30:10',
    'updated_at' => '2022-10-26 23:30:10',
),
176 => 
array (
    'id' => 252,
    'title' => 'Deo',
    'email' => 'pranay1@hotmail.co.uk',
    'phone' => '07780241661',
    'description' => 'To whom it may concern,

I would like to book an appointment in the Birmingham store on Saturday 29th October for engagement rings, in the afternoon if possible?

Kind regards,
Deo',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-27 01:13:23',
    'updated_at' => '2022-10-27 01:13:23',
),
177 => 
array (
    'id' => 253,
    'title' => 'Helen Hewison',
    'email' => 'helenhewison@hotmail.co.uk',
    'phone' => '07919275225',
    'description' => 'Hi,

I got my engagement ring from yourselves in 2020 and am hoping to get a wedding band to match, is it possible to come in at 2 ish on Tuesday 1st nov?

Many thanks

Helen',
    'custom_url' => 'https://marlows-diamonds.co.uk/product/wed013',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-27 15:21:50',
    'updated_at' => '2022-10-27 15:21:50',
),
178 => 
array (
    'id' => 254,
    'title' => 'Lisa Brown',
    'email' => 'lisa@digitalmarketings.co',
    'phone' => '9013061554',
    'description' => 'Get your website to Google first page - SEO for your website!

Hey there,

We can put your website on 1st page of Google to drive relevant traffic to your site. Let us know if you would be interested in getting detailed proposal. We can also schedule a call & will be pleased to explain our services in detail. We look forward to hearing from you soon.

Thank you!',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-28 15:09:43',
    'updated_at' => '2022-10-28 15:09:43',
),
179 => 
array (
    'id' => 255,
    'title' => 'Ernest Halm',
    'email' => 'ehalm2010@gmail.com',
    'phone' => '07748805769',
    'description' => 'My ring fell down and it\'s broken. I am in Birmingham on the 4th to the 6th if it could be fixed for me before i leave. thanks',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-28 22:12:08',
    'updated_at' => '2022-10-28 22:12:08',
),
180 => 
array (
    'id' => 256,
    'title' => 'Ernest Halm',
    'email' => 'ehalm2010@gmail.com',
    'phone' => '07748805769',
    'description' => 'I have a broken ring and am in Birmingham on the 4th leaving on  the 6th of November. Can i bring it in for repair and get in back on time?

Regards',
    'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
    'is_deleted' => 0,
    'deleted_at' => NULL,
    'created_at' => '2022-10-28 22:14:14',
    'updated_at' => '2022-10-28 22:14:14',
),
181 => 
array (
    'id' => 257,
    'title' => 'Kevin Koh',
    'email' => 'kevinkoh@gmail.com',
    'phone' => '+6596319188',
    'description' => 'Hi there, 
I\'d be interested to have a look at your selection of lab grown diamonds. I will be visiting London in November from 17-20 and would like to make an appointment to come down to your shop.
Some questions:
1) Could I have a catalogue of your loose diamonds to peruse together with your pricing beforehand? Am looking for a somewhere between a 1.5-1.8 ct stone and my budget is between GBP 2k - 2.5k.
2) As I\'m visiting from Singapore, would it be possible to claim VAT at the customs?
3) What are you opening hours for the dates of my visit?
Thank you and hear from you soon. 
Best,
Kevin',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-10-30 15:33:11',
'updated_at' => '2022-10-30 15:33:11',
),
182 => 
array (
'id' => 258,
'title' => 'Jenna Hirons',
'email' => 'jenna.m.hirons@gmail.com',
'phone' => '07872936375',
'description' => 'Hello, I have an engagement ring with the walnut box that was purchased from Marlows in circa 2018. I was wondering whether Marlows buy back engagement rings? It is a platinum ring, with sapphire and two pear diamonds.  If Marlows does not, are you able to recommend a reputable place that may look to buy the item?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-10-31 17:25:51',
'updated_at' => '2022-10-31 17:25:51',
),
183 => 
array (
'id' => 259,
'title' => 'Pauline',
'email' => 'drew.paulinen@gmail.com',
'phone' => '07708426563',
'description' => 'Hi, I’m looking for a: Solitaire: Round brilliant cut;  1crt natural diamond;  6 Claws; Clarity VVS1;  Cut: Excellent;  Colour E;  Platinum; GIA Certificate; Size: L½;  Price around £6K. Can you assist?
Many thanks Pauline',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-10-31 18:52:26',
'updated_at' => '2022-10-31 18:52:26',
),
184 => 
array (
'id' => 260,
'title' => 'Carina randle',
'email' => 'carinaxcx@yahoo.co.uk',
'phone' => '07720763581',
'description' => 'Hi, I spoke to someone a few months ago regarding my wedding band I purchased through you and some of the stones are missing were they have fallen out. I spoke to a lovely lady who said I could send it back to be fixed and that you would also value the ring at the same time. I feel bad as I can’t remember her name, I think it might have been Alison, is there anyone with the name that works there? Also should I mark it for her attention? Thanks in advance',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-02 16:10:59',
'updated_at' => '2022-11-02 16:10:59',
),
185 => 
array (
'id' => 261,
'title' => 'Alex Clarke',
'email' => 'alexclarke89@gmail.com',
'phone' => '+447539354308',
'description' => 'I am looking for a lab-grown diamond. I will be in Birmingham from the 8th to 11th of November.
Thanks!',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-02 19:56:38',
'updated_at' => '2022-11-02 19:56:38',
),
186 => 
array (
'id' => 262,
'title' => 'Jake Marlow',
'email' => 'jmarlow1995@outlook.com',
'phone' => '07841610608',
'description' => 'Hello

I like the look of ADDISON | Slim Twist Set Diamond Engagement Ring and was wondering about booking an appointment for the 26 November

Thank you',
'custom_url' => 'https://marlows-diamonds.co.uk/product/addison',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-04 18:11:34',
'updated_at' => '2022-11-04 18:11:34',
),
187 => 
array (
'id' => 263,
'title' => 'Julio Varela',
'email' => 'julio.var.rodriguez@gmail.com',
'phone' => '07557343197',
'description' => 'Good morning,

I am interested on buying an engagement ring. I like the Ariana model quite a lot but would like to ask you if you have it with 6 claws.

When could we have an appointment?

Thank you!

Julio.',
'custom_url' => 'https://marlows-diamonds.co.uk/product/ariana',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-05 14:33:47',
'updated_at' => '2022-11-05 14:33:47',
),
188 => 
array (
'id' => 264,
'title' => 'JULIO VARELA',
'email' => 'julio.var.rodriguez@gmail.com',
'phone' => '07557343197',
'description' => 'Good morning,

I am interested on buying an engagement ring. I like the Ariana model quite a lot but would like to ask you if you have it with 6 claws.

When could we have an appointment?

Thank you!

Julio.',
'custom_url' => 'https://marlows-diamonds.co.uk/product/ariana',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-05 14:34:41',
'updated_at' => '2022-11-05 14:34:41',
),
189 => 
array (
'id' => 265,
'title' => 'Roxanne Davies',
'email' => 'roxydavies1989@hotmail.com',
'phone' => '07931160945',
'description' => 'Good morning, 

My partner purchased my engagement ring from your selves.

It was re sized in your store as it was too big. However, at the back of the ring it has gone very thin and it is very noticeable with the difference.

I have popped into store and showed a lady there. However, I am still not happy with the out come. The lady was helpful but nothing was done. 

I feel the stone needs to be put on to a new ring. My main concern is, it’s too thin now at the back. Also, if needed to be re sized in the future this will not be possible.

I have had advice from else where they have recommended the stone needs to be on a slightly thicker ring to avoid this issue. As they feel stone is too big for the ring thickness.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-07 14:44:40',
'updated_at' => '2022-11-07 14:44:40',
),
190 => 
array (
'id' => 266,
'title' => 'FRANCIS TANG',
'email' => 'francis.tang@gmail.com',
'phone' => '07384457468',
'description' => 'Do you have appointment availability on Mon 14th  November morning?',
'custom_url' => 'https://marlows-diamonds.co.uk/product/callie',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-07 16:55:01',
'updated_at' => '2022-11-07 16:55:01',
),
191 => 
array (
'id' => 267,
'title' => 'Steve Emerson',
'email' => 'steveemerson2ones@yahoo.co.uk',
'phone' => '07870200951',
'description' => 'Hi I am
Interested in a diamond for 60th birthday upto the price of 5 to 6k',
'custom_url' => 'https://marlows-diamonds.co.uk/live-diamond-search',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-08 00:18:53',
'updated_at' => '2022-11-08 00:18:53',
),
192 => 
array (
'id' => 268,
'title' => 'Jan Eastwood',
'email' => 'jan@eastwoods.net',
'phone' => '+447713401901',
'description' => 'We bought our daughter a diamond necklace from you 10 years ago with a chain length of 16" but would like to buy a longer chain for it (21").  My daughter has lost the paperwork that went with it and so I having difficulty establishing what sort of chain she currently has.  If I send you photos would you be able to give me a quote for the longer chain?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-09 15:12:44',
'updated_at' => '2022-11-09 15:12:44',
),
193 => 
array (
'id' => 269,
'title' => 'Issie Darcy',
'email' => 'issie.darcy@gmail.com',
'phone' => '07805753021',
'description' => 'Hello,
My partner bought my engagement ring from Marlows in Birmingham. We\'d like to come to Marlows to get our wedding rings, but ideally we\'d come to the London branch as we live in London. Do we need to book an appointment for this or can we just walk in? And how long in advance of the wedding would you suggest we come in?
Thank you!
Issie',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-10 15:35:58',
'updated_at' => '2022-11-10 15:35:58',
),
194 => 
array (
'id' => 270,
'title' => 'David',
'email' => 'davewr_tricky@hotmail.co.uk',
'phone' => '07999484378',
'description' => 'Hi Marlows,
Just enquiring about a Male wedding band. I brought my, now fiance\'s, engagement ring from you earlier in the year. I can\'t see anything on the website do you, or can you obtain, a mens hammered wedding ring?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-10 21:49:45',
'updated_at' => '2022-11-10 21:49:45',
),
195 => 
array (
'id' => 271,
'title' => 'Daniel',
'email' => 'Daniel.neuchterlien@gmail.com',
'phone' => '07595838954',
'description' => 'Hi,

Could you please tell me if it is necessary to book an appointment and if so would I be able to book Sunday 27th of November? 

Many thanks 

Daniel Neuchterlien',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-11 01:11:42',
'updated_at' => '2022-11-11 01:11:42',
),
196 => 
array (
'id' => 272,
'title' => 'Emma Wellard',
'email' => 'em_wellard@yahoo.co.uk',
'phone' => '07986802844',
'description' => 'Hi, I have both an engagement and eternity ring from you in white gold and wondered if the lifetime cleaning/polishing also covered rhodium re-plating?  Many thanks for your assistance.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-14 19:03:44',
'updated_at' => '2022-11-14 19:03:44',
),
197 => 
array (
'id' => 273,
'title' => 'Paula',
'email' => 'paulam200215@yahoo.com',
'phone' => '07742339492',
'description' => 'Hello,
My fiancé Ricky Beaumont purchased my engagement ring from you in May. I need to have it resized, and the stone is slightly loose.
Is this something you can do in a day, or will we need to leave the ring with you? 
Do we need to book a visit in? 
Many thanks,
Paula',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-15 01:47:45',
'updated_at' => '2022-11-15 01:47:45',
),
198 => 
array (
'id' => 274,
'title' => 'Janice Petrasch',
'email' => 'janicepetrasch@hotmail.com',
'phone' => '07971478533',
'description' => 'Good morning I hope you can help me.  I have two lovely rings from you which I have brought on occasion for checking, re-rhodium plating, and valuation.  My query is do you still offer this and as I live in Nottingham is it something you could do in the same day?  Looking forward to hearing from you.  Kind regards, Janice Petrasch',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-16 14:41:15',
'updated_at' => '2022-11-16 14:41:15',
),
199 => 
array (
'id' => 275,
'title' => 'James Panting',
'email' => 'jamespanting@gmail.com',
'phone' => '07988551067',
'description' => 'Hello,

We are looking to get an engagement ring made, resetting a  diamond from a family ring. We were interested in looking at some of your bands and talking about the possibility of this with you? We would love to call in on Sunday if you had availability?

Best,

James',
'custom_url' => 'https://marlows-diamonds.co.uk/product/finley',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-18 02:09:02',
'updated_at' => '2022-11-18 02:09:02',
),
200 => 
array (
'id' => 276,
'title' => 'Valerie Walmsley',
'email' => 'valiwal@yahoo.co.uk',
'phone' => '07972750427',
'description' => 'I have a ring which was purchased from you  almost 30 years ago.
one of the claws has bent.  Would you be able to correct this for me on Monday 21st November when I\'m in the area?

Many thanks',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-18 18:17:58',
'updated_at' => '2022-11-18 18:17:58',
),
201 => 
array (
'id' => 277,
'title' => 'Ange MacGillivray',
'email' => 'jamesandange@gmail.com',
'phone' => '07538474557',
'description' => 'Interested in wholesale diamonds as well as an eternity ring in rose gold and an engagement ring, also rose gold, rubover with larger diamond.',
'custom_url' => 'https://marlows-diamonds.co.uk/product/et106',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-19 00:27:22',
'updated_at' => '2022-11-19 00:27:22',
),
202 => 
array (
'id' => 278,
'title' => 'Ateeba',
'email' => 'akakram@hotmail.co.uk',
'phone' => '07528370737',
'description' => 'My brother bought a platinum mens band from yourselves a couple of years ago. He has now got divorced and would like to sell his ring. Do you buy back products? Thank you',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-19 23:57:39',
'updated_at' => '2022-11-19 23:57:39',
),
203 => 
array (
'id' => 279,
'title' => 'Jo Harrop',
'email' => 'joharrop@btopenworld.com',
'phone' => '07711504625',
'description' => 'Hi
I bought a tennis bracelet years ago from you and wondered if I were to bring it in to you would you be able to fix it please?

Regards
Jo',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-23 03:16:37',
'updated_at' => '2022-11-23 03:16:37',
),
204 => 
array (
'id' => 280,
'title' => 'Phillippa james',
'email' => 'phillippa.james@hotmail.com',
'phone' => '07894730700',
'description' => 'Do you purchase jewellery ?
If it comes with its original valuation?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-23 14:28:55',
'updated_at' => '2022-11-23 14:28:55',
),
205 => 
array (
'id' => 281,
'title' => 'Rachael Ellis',
'email' => 'rsj.ellis@sky.com',
'phone' => '07952 915 424',
'description' => 'Hi 
please could you let me know your opening hours (via email please) I need to return a diamond ring to be mended. 
thanks',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-23 18:08:19',
'updated_at' => '2022-11-23 18:08:19',
),
206 => 
array (
'id' => 282,
'title' => 'Norbert Farkas',
'email' => 'nfarkas.uk@gmail.com',
'phone' => '07703389396',
'description' => 'Hi, I would like to book an in-person consultation to see some of the engagement rings, I\'m  particularly interested in rose gold rings with the solitaire design, such as the Aurora or Ariana rings in rose gold. 
If you have availability it would be great to have a consultation this Thursday or Friday. Many thanks!',
'custom_url' => 'https://marlows-diamonds.co.uk/product/callie',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-23 20:58:28',
'updated_at' => '2022-11-23 20:58:28',
),
207 => 
array (
'id' => 283,
'title' => 'Priya Mattu',
'email' => 'priya.mattu@gmail.com',
'phone' => '07999390809',
'description' => 'Hi,  we bought our wedding bands (and my fiance bought my engagement ring) from Marlows Birmingham. Do you offer an engraving service and if so, do you offer this in the London store?

Thanks 
Priya',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-24 19:35:16',
'updated_at' => '2022-11-24 19:35:16',
),
208 => 
array (
'id' => 284,
'title' => 'Lorraine Bird',
'email' => 'birdflorence2@outlook.com',
'phone' => '07843622879',
'description' => 'My husband purchased a diamond ring from you for my birthday in 2015 and we would like to have it valued if possible.
Do we have to make an appointment or can we just pop in?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-25 21:41:29',
'updated_at' => '2022-11-25 21:41:29',
),
209 => 
array (
'id' => 285,
'title' => 'SHARAF JAMA L',
'email' => 'JAMASMN@YAHOO.CA',
'phone' => '079 0485 0072',
'description' => 'KEEO ME POSTED OF ANY SALES',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-26 08:23:08',
'updated_at' => '2022-11-26 08:23:08',
),
210 => 
array (
'id' => 286,
'title' => 'Amy Henley',
'email' => 'amyjanehenley@gmail.com',
'phone' => '07999737617',
'description' => 'Hello, I am looking to sell my wedding and engagement rings. I know my ex husband brought my engagement ring from you, do you also buy these back?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-27 17:05:01',
'updated_at' => '2022-11-27 17:05:01',
),
211 => 
array (
'id' => 287,
'title' => 'Megan Haines',
'email' => 'meganhaines93@hotmail.com',
'phone' => '07956299312',
'description' => 'Hello, 

Are you open between Christmas and New Year? Thanks',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-28 01:17:09',
'updated_at' => '2022-11-28 01:17:09',
),
212 => 
array (
'id' => 288,
'title' => 'Craig Lambert',
'email' => 'craig_lambert07@yahoo.co.uk',
'phone' => '07789 002968',
'description' => 'Good morning,

Please can you advise your current delivery time for the selected ring?

Kind regards,

Craig',
'custom_url' => 'https://marlows-diamonds.co.uk/product/dakota',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-28 17:24:07',
'updated_at' => '2022-11-28 17:24:07',
),
213 => 
array (
'id' => 289,
'title' => 'Vedant B Hegde',
'email' => 'info@modakatech.com',
'phone' => '(948) 111-0869',
'description' => 'Hello team,

I am Vedant from ModakaTech.

I would like to introduce our Augmented Reality based Virtual Try-on software “Camweara” which is helping jewelers to increase sales.

Try now - https://modakatech.com/camweara-demos/

Can you connect me to your marketing head?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-11-28 18:24:41',
'updated_at' => '2022-11-28 18:24:41',
),
214 => 
array (
'id' => 290,
'title' => 'Ben Wells',
'email' => 'wellzee1981@hotmail.com',
'phone' => '07917858781',
'description' => 'Just placed an order no31060. There was no delivery information. When can I expect a delivery. This is obviously a Christmas present and need to confirm ill have it before then.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-02 17:04:57',
'updated_at' => '2022-12-02 17:04:57',
),
215 => 
array (
'id' => 291,
'title' => 'Justin',
'email' => 'janpieter.hedmunds@drivem.my.id',
'phone' => '4048141814',
'description' => 'Are there any other options',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-05 06:33:25',
'updated_at' => '2022-12-05 06:33:25',
),
216 => 
array (
'id' => 292,
'title' => 'James',
'email' => 'janpieter.hedmunds@drivem.my.id',
'phone' => '4048141814',
'description' => 'Are there any other options',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-05 06:36:20',
'updated_at' => '2022-12-05 06:36:20',
),
217 => 
array (
'id' => 293,
'title' => 'Leilanie Corpuz',
'email' => 'yourdomaingurulan1@gmail.com',
'phone' => '(000)000-0000',
'description' => 'Hello, 

My name is Leilanie from TDS. We have a domain that is currently on sale that you might be interested in - BestPlaceToBuyDiamonds.com

Anytime someone types Place To Buy Diamonds, Diamonds For Sale, The Best Place To Buy Diamonds, or any other phrase with these keywords into their browser, your site could be the first they see!

The internet is the most efficient way to acquire new customers

Avg Google Search Results for this domain is: 97,600,000
You can easily redirect all the traffic this domain gets to your current site!

EstiBot.com appraises this domain at $1,000. 

Priced at only $398 for a limited time! If interested please go to BestPlaceToBuyDiamonds.com and select Buy Now, or purchase directly at  GoDaddy.   
Act Fast! First person to select Buy Now gets it!  

Thank you very much for your time.
Best Regards,
Leilanie Corpuz',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-05 06:43:38',
'updated_at' => '2022-12-05 06:43:38',
),
218 => 
array (
'id' => 294,
'title' => 'Thelma',
'email' => 'Thelma30.com@gmail.com',
'phone' => '07547 3336111',
'description' => 'Hi',
'custom_url' => 'https://marlows-diamonds.co.uk/product/aaliyah',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-07 00:37:00',
'updated_at' => '2022-12-07 00:37:00',
),
219 => 
array (
'id' => 295,
'title' => 'Paul Allen',
'email' => 'paul@thewebandappexperts.com',
'phone' => '9162347474',
'description' => 'Hi Dear,

I hope you are doing well.

I have analyzed your website you seem to have a good website. But the concern is,

It needs to be an improved design for better looks and attractiveness with mobile responsive.

So that visitors will see your services briefly and navigate from one page to another page with ease.

While I was going through your website,I came across some factors which need to improve.Such as:


· Some mobile responsive issues are there.

· At a smaller screen, the texts need to be organized nicely.

· The design needs to improve for better looks and attractiveness.

· Need to add a well-organized Logo for your website.

· Need to add looking images to describe your business.

· Images are too small to attract your visitors.

· Footer part also needs to be improved.

· Need to modify the favicon image according to your logo.

· Color combination always grabs visitor attention.

Also, we need to use colors according to ADA guidelines.That is where it should be eye-catching.

We can redesign your website responsive by writing the back-end code with HTML5 and CSS3

technologies with which your site will auto-fit according to the devices.

Let me know if I should share a customized plan as per your website requirement.

I am looking forward to your kind response.

Regards
Paul Allen
Call Us:+1 (916) 234-7474
0091 7439740725 (Available on Whatsapp)
The Web & APP Experts
www.thewebandappexperts.com',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-07 13:17:06',
'updated_at' => '2022-12-07 13:17:06',
),
220 => 
array (
'id' => 296,
'title' => 'Alan Bathurst',
'email' => 'alanb6661@icloud.com',
'phone' => '+44 7794 905225',
'description' => 'Hi, would  like to come in and  view your diamond rings please',
'custom_url' => 'https://marlows-diamonds.co.uk/product/amber',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-12 01:22:54',
'updated_at' => '2022-12-12 01:22:54',
),
221 => 
array (
'id' => 297,
'title' => 'Christopher Burkitt',
'email' => 'csburkitt@hotmail.co.uk',
'phone' => '07470661920',
'description' => 'Hi guys,

I bought my partners engagement ring from your Jewellery Quarter store around 6 years ago. It has slightly discolours and one of the stones has been lost. Do you offer a repair service in store?

Many thanks,
Chris',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-13 02:27:26',
'updated_at' => '2022-12-13 02:27:26',
),
222 => 
array (
'id' => 298,
'title' => 'Sagar Shah',
'email' => 'sagar_shah121@hotmail.com',
'phone' => '07947875463',
'description' => 'Hi there,

I am looking for an engagement ring. Oval diamond between 1.2-1.5 with a hidden halo (this is key). Could you please let me know if you have anything like this in stock and if so, what the cost is as well as the other specifics on colour / clarity.

Many thanks,
Sagar',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-14 18:06:48',
'updated_at' => '2022-12-14 18:06:48',
),
223 => 
array (
'id' => 299,
'title' => 'Steven Williams',
'email' => 'steven@denshawvale.co.uk',
'phone' => '07584079340',
'description' => 'Hello I\'m looking t the twisted hoop diamond earrings 3.25 carat. Are they available from stock? 
Kind regards
Steven',
'custom_url' => 'https://marlows-diamonds.co.uk/product/stunning-twist-diamond-hoops',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-14 21:42:44',
'updated_at' => '2022-12-14 21:42:44',
),
224 => 
array (
'id' => 300,
'title' => 'Sherree Mathieu',
'email' => 'reeree18@hotmail.co.uk',
'phone' => '07411296080',
'description' => 'Hi do you have availability in the evenings early next week for an appointment?',
'custom_url' => 'https://marlows-diamonds.co.uk/live-diamond-search',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-15 17:59:01',
'updated_at' => '2022-12-15 17:59:01',
),
225 => 
array (
'id' => 301,
'title' => 'Sajin Maharjan',
'email' => 'Sajinmaharjan@hotmail.com',
'phone' => '07429134330',
'description' => 'How long does it take  to make this ring ?',
'custom_url' => 'https://marlows-diamonds.co.uk/product/rosie',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-16 17:42:43',
'updated_at' => '2022-12-16 17:42:43',
),
226 => 
array (
'id' => 302,
'title' => 'Hilary',
'email' => 'htrueman@talktalk.net',
'phone' => '07816926967',
'description' => 'Looking for a price for 1.5 carat solitaire ring',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-18 21:09:34',
'updated_at' => '2022-12-18 21:09:34',
),
227 => 
array (
'id' => 303,
'title' => 'Kathleen snape',
'email' => 'kbetney@hotmail.co.uk',
'phone' => '07415463455',
'description' => 'Good morning, would you be interested in buying my solitaire 3.08ct diamond ring, I purchased from you about 7 years ago and looking for a price for selling it, if your not interested in buying it can you give me a rough estimate what to sell it for, it’s colour is K and clarity is SI1 round diamond, Many thanks kathy',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-19 16:07:41',
'updated_at' => '2022-12-19 16:07:41',
),
228 => 
array (
'id' => 304,
'title' => 'Jack Johnson',
'email' => 'jack@seoknightss.com',
'phone' => '9162347474',
'description' => 'Hello,

How are you doing? Hope you are fine.

I have been checking your website quite often. It has seen that the main keywords are still not in the top 10 ranks as per Search Engine Results Pages (SERP) & you have poor organic search traffic. We also detect some issues on your website. You know things about working; I mean the procedure of working has changed a lot.

So, Would you like to increase the leads/sales generated from your website?

Would you like to be listed at the top of every major search engine such as Google, Yahoo! & Bing for multiple search phrases (keywords) relevant to your products/services?

Would you like an abundance of laser targeted high-quality visitors to your website every day?

We provide a complete solution for your Online Business need.
I would like to have the opportunity to work for you and this time we will bring the keywords to the top 10 spots with the guaranteed period & bring huge organic search traffic.

Our Steps and the Activities to Rank You Smart
• Keywords Research
• Competition Analysis
• Optimized Content Creation
• Keywords Optimization
• Back Link Creation/Link Building
• Submission to Search Engines and Directories
• Submission to Article Directories
• Google AdWords Setup & Management Services
• Guest Blog Post Links
• Competitor Backlinks Create
We are a team of 100+ professionals which includes 18 full-time SEO experts, 15 full-time developers, 4 full-time App Developer, 20 Full-time content writer, 30 Marketing Executive, 8 Project coordinator. We are proud to inform you that our team handled 100+ SEO projects and many website design & development works. Each team is managed by a team leader.

If you are the right person & interested in our service then we’ll send you a website full audit report. So you can understand what works need to be done and what not.

We will be glad to assist you in offering our services.

Contact us for the best quote for your website & we will help to Rank You top 10 positions in Google ranking.

Looking forward to hearing something from you soon....

Regards
Jack Johnson
Call Us:+1 (916) 234-7474
0091 7439740725 (Available on Whatsapp)
SEO Knights
www.seoknightss.com',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-19 18:00:53',
'updated_at' => '2022-12-19 18:00:53',
),
229 => 
array (
'id' => 305,
'title' => 'Daniel Jason',
'email' => 'it.mvwsusa5@gmail.com',
'phone' => '5168562184',
'description' => 'Hello Sir/Madam,
My self Daniel, from an Internet Marketing Company. I would like to tell you some points about your online business. I hope you won’t mind spending only 2-3 minutes to have a look at the following lines:
It seems you\'ve been spending your budget with sponsored listings or PPC.
. In PPC, you may get the sales but only after paying a certain amount every time and if you stop paying, then the sales will vanish soon.
 . In SEO, You need to budget for a few months. Once keywords will be on the first page of Google, you can get satisfied traffic for a long time. 
. 90% of users like Organic results over the sponsored ones because these results are more relevant and valuable. So just imagine how many valuable customers you are losing by not focusing on organic search results.

By investing a few months in SEO, you can see drastic changes in your  website internally and externally. We\'ll show you TOP Rankings in your  keywords, link popularity, organic traffic and many more...

After reviewing your website , I noticed some major on-page and off-page issues need to be fixed soon. For more information about your site errors, please respond to my email.
I would be happy to provide you with a Complete Site Analysis Report (free of cost) with our Company Profile, Work Experience and Client Testimonials. 
Our main AIM is customer satisfaction. We are not like others. We\'ve limited customers and make sure they are really happy with our performance. 
You may be interested with Big Big Companies but I can say they\'re taking money only showing their company brand to customers; otherwise the result part is Zero. Decision is yours!
We wish you the best of luck and look forward to a long and healthy business relationship with you and your company.
Waiting for your positive response… 
Best Regards,
Daniel Jason
--------------------------------------
Business Development Manager
New York 11801,USA
CONFIDENTIALITY NOTICE: This email, including any attachments, is for the sole use of the intended recipient(s) and may contain confidential and privileged information. Any unauthorized review, use or distribution is prohibited. If you are not the intended recipient, please contact the sender immediately and destroy all copies of the original message. Thank you',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-19 18:53:41',
'updated_at' => '2022-12-19 18:53:41',
),
230 => 
array (
'id' => 306,
'title' => 'Darren zhao',
'email' => 'dw@dgqbjewelrybox.cn',
'phone' => '18128694061',
'description' => 'hello 
good day
thank you very much for your kindly view 
Our company mainly produce all kinds of jewelry box such as ring box, earring box, pendant box, bangle box, necklace box, bracelet box, box set, etc. with secure and hassle-free Alibaba payment via
Please feel free contact me if you need catalog or you need any request for quotation.
We have four advantages as below:
1. We are factory, so the prices can be cheaper.
2. We use good material to produce the products.
3. Every products must be inspected before delivery.
4. Our jewelry boxes are made of metal shell covered with leather or velvet which will make your products more luxury and elegant, which will let you get more added value.
When we can, we will ship out using Alibaba  logistics so that our customers can received their orders faster and less shipping charge
Freight Carriers local deliver
We offer very good freight rates with some excellent freight companies. 
Your early response will be much appreciated!
Thanks & Best regards
Darren 
Dongguan City Qibang He Yu Hardware Products Co.,Ltd
Add: QIBANG , Tepuyou Technology Park , No.232 , Wentang North Road , Wenzhou Road , DongGuan City. GuangDong Province.China.
Mobile & Wechat: +86-18128694061
Fax: +86-769-85780519
Website: qibang-box.en.alibaba.com 
E-mail: dw@dgqbjewelrybox.cn',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-23 08:36:21',
'updated_at' => '2022-12-23 08:36:21',
),
231 => 
array (
'id' => 307,
'title' => 'vansh sanghvi',
'email' => 'sanghvvansh@yahoo.in',
'phone' => '+91-8200552474',
'description' => 'Hi
We are glad to introduce ourself as an manufacturer for Lab grown polished diamonds, We are stocked up with 0.0001 - 1.00 ready to deliver with finest clarity & make. We would be more than happy to do business with your good self and we promise to deliver the best.
We look forward to hear from you 
GAUTAM GEMS (Mr. Vansh Sanghvi)',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-26 11:00:01',
'updated_at' => '2022-12-26 11:00:01',
),
232 => 
array (
'id' => 308,
'title' => 'Daniel Wright',
'email' => 'danielmarkwright@hotmail.co.uk',
'phone' => '07989282788',
'description' => 'Hi! I recently purchased a wonderful engagement ring from Marianne, and while I\'m still very happy with it, I was wondering if it may be possible to return it and go for a higher value and quality diamond? It\'s still unworn and hasn\'t been presented as I intend to propose in a few months, but I\'ve since decided I\'d like to spend potentially a fair bit more on the ring. If this may be possible, please let me know. It would be preferable if you could respond via email so I don\'t get any questions regarding the call, but understand if that\'s not possible. Thanks!',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-26 21:30:38',
'updated_at' => '2022-12-26 21:30:38',
),
233 => 
array (
'id' => 309,
'title' => 'Megan Haines',
'email' => 'meganhaines93@hotmail.com',
'phone' => '07956299311',
'description' => 'Hello, please can we book an appointment in the birmingham shop to choose wedding rings tomorrow at 11am? 
Thank you.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-27 16:54:21',
'updated_at' => '2022-12-27 16:54:21',
),
234 => 
array (
'id' => 310,
'title' => 'Christopher Challis',
'email' => 'Christopher.challis@icloud.com',
'phone' => '+44 47946026061',
'description' => 'Am
Deaf want Dep how pay moth can you tell me',
'custom_url' => 'https://marlows-diamonds.co.uk/product/hayden',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-27 20:40:41',
'updated_at' => '2022-12-27 20:40:41',
),
235 => 
array (
'id' => 311,
'title' => 'Adam Leech',
'email' => 'adamleech22@hotmail.com',
'phone' => '07795263340',
'description' => 'Hello, Could you please advise if you sell halo pendants?
Thanks
Adam',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-29 18:15:06',
'updated_at' => '2022-12-29 18:15:06',
),
236 => 
array (
'id' => 312,
'title' => 'Tracy Lappin',
'email' => 'tracy.lappin@yahoo.co.uk',
'phone' => '0785616819',
'description' => 'Hi 

My partner brought me a pair of earrings from you.  I lost one and I brought a replacement on from you. On wearing the earring the leg part of the earring is not as long as the original one.  When I wear the earring it sits deep inside and u can’t see the earring. Is there anything that can be done.  

Thanks 

Tracy.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-30 02:14:34',
'updated_at' => '2022-12-30 02:14:34',
),
237 => 
array (
'id' => 313,
'title' => 'Aimee',
'email' => 'aimee_ward@hotmail.co.uk',
'phone' => '07792693687',
'description' => 'Hi, we got my engagement and wedding ring from yourselves, after having a baby I may need to get them resized, is this something you do and what are the prices ? Thanks, Aimee',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-30 04:18:02',
'updated_at' => '2022-12-30 04:18:02',
),
238 => 
array (
'id' => 314,
'title' => 'Margaret sinnott',
'email' => 'Mgtsinnott@gmail.com',
'phone' => '+353873957911',
'description' => '⁷',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-30 22:00:42',
'updated_at' => '2022-12-30 22:00:42',
),
239 => 
array (
'id' => 315,
'title' => 'Noreen Latif',
'email' => 'noreen_aslam1982@yahoo.co.uk',
'phone' => '07792555115',
'description' => 'Hello. I purchased my wedding rings from you 12yrs ago. My eternity band has snapped, and I can’t get it off my finger, I was hoping you could help fix this and also clean my rings? I bought both engagement and wedding ring from you.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2022-12-31 17:04:31',
'updated_at' => '2022-12-31 17:04:31',
),
240 => 
array (
'id' => 316,
'title' => 'Narvinder Sunder',
'email' => 'sunder_31@msn.com',
'phone' => '07429242450',
'description' => 'Hi I purchased my wife’s engagement and wedding ring from you back in 2013.  I was hoping to get a replicate of the wedding band purchased as an eternity ring. 

Could you please see if you have the information regarding the original purchase and size it would have been in my name or hers Lakhy Basra

Thanks',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-01 18:44:32',
'updated_at' => '2023-01-01 18:44:32',
),
241 => 
array (
'id' => 317,
'title' => 'Smith Jonty',
'email' => 'jontysmithusen.2021@gmail.com',
'phone' => '6502530000',
'description' => 'Test',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-02 10:47:37',
'updated_at' => '2023-01-02 10:47:37',
),
242 => 
array (
'id' => 318,
'title' => 'Georgie Denny',
'email' => 'georgie_denny@hotmail.co.uk',
'phone' => '07712887177',
'description' => 'Hello, 

I recently got engaged but my ring needs resizing as it is a bit big. My partner purchased my ring from VRAI. I’m just wondering if this is something you offer and if so how long would it take? Would I need to book an appointment? 
The nearest store to me would be Birmingham. 

Kind regards,
Georgie',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-03 01:48:32',
'updated_at' => '2023-01-03 01:48:32',
),
243 => 
array (
'id' => 319,
'title' => 'Debbie Aston',
'email' => 'dp1622@yahoo.com',
'phone' => '07976368007',
'description' => 'I am interested in the ring shown above as “Grace” please.

Thank you',
'custom_url' => 'https://marlows-diamonds.co.uk/product/grace',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-03 03:07:55',
'updated_at' => '2023-01-03 03:07:55',
),
244 => 
array (
'id' => 320,
'title' => 'Oliver Smith',
'email' => 'oliversmith138@hotmail.com',
'phone' => '07710824250',
'description' => 'appointment needed',
'custom_url' => 'https://marlows-diamonds.co.uk/product/phoenix',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-03 21:55:32',
'updated_at' => '2023-01-03 21:55:32',
),
245 => 
array (
'id' => 321,
'title' => 'David pashby',
'email' => 'davidpashby@yahoo.co.uk',
'phone' => '07884934284',
'description' => 'Please can you send a catalogue thanks 
105west road Filey yo149nf',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-04 02:44:26',
'updated_at' => '2023-01-04 02:44:26',
),
246 => 
array (
'id' => 322,
'title' => 'Jenna Appleby',
'email' => 'jennaappleby@outlook.com',
'phone' => '07568316379',
'description' => 'Hi There, 
What are your opening hours on Saturday at the Birmingham location please? 
Struggling to find this info on your website 
Thanks 
Jen',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-04 03:24:17',
'updated_at' => '2023-01-04 03:24:17',
),
247 => 
array (
'id' => 323,
'title' => 'Daniel Jason',
'email' => 'daniel.jason77777@gmail.com',
'phone' => '5168562184',
'description' => 'Hello Sir/Madam,

I am Daniel, from an Internet Marketing Company.

I would like to tell you some points about your online business. I hope you won’t mind spending only 2-3 minutes to have a look at the following lines:

It seems you\'ve been spending your budget with a sponsored listing or PPC.

In PPC, you may get the sales but only after paying a certain amount every time and if you stop paying, then the sales will vanish soon.

. In SEO, You need to budget for a few months. Once keywords will be on the first page of Google, you can get satisfied traffic for a long time.

. 90% of users like Organic results over the sponsored ones because these results are more relevant and valuable. So just imagine how many valuable customers you are losing by not focusing on organic search results.

By investing a few months in SEO, you can see drastic changes in your website internally and externally. We\'ll show you TOP Rankings in your keywords, link popularity, organic traffic and many more...

After reviewing your website , I noticed some major on-page and off-page issues need to be fixed soon. For more information about your site errors, please respond to my email.

I would be happy to provide you with a Complete Site Analysis Report (free of cost) with our Company Profile, Work Experience and Client Testimonials.

Our main AIM is customer satisfaction. We are not like others. We\'ve limited customers and make sure they are really happy with our performance.

You may be interested in Big Big Companies but I can say they\'re taking money only showing their company brand to customers; otherwise the result part is Zero. Decision is yours!

We wish you the best of luck and look forward to a long and healthy business relationship with you and your company.

Waiting for your positive response…

Best Regards,
Daniel Jason
--------------------------------------
Business Development Manager
New York 11801, USA

CONFIDENTIALITY NOTICE: This email, including any attachments, is for the sole use of the intended recipient(s) and may contain confidential and privileged information. Any unauthorized review, use or distribution is prohibited. If you are not the intended recipient, please contact the sender immediately and destroy all copies of the original message. Thank you.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-04 18:06:22',
'updated_at' => '2023-01-04 18:06:22',
),
248 => 
array (
'id' => 324,
'title' => 'Daniel Jason',
'email' => 'daniel.jason77777@gmail.com',
'phone' => '5168562184',
'description' => 'Hello Sir/Madam,

I am Daniel, from an Internet Marketing Company.

I would like to tell you some points about your online business. I hope you won’t mind spending only 2-3 minutes to have a look at the following lines:

It seems you\'ve been spending your budget with a sponsored listing or PPC.

In PPC, you may get the sales but only after paying a certain amount every time and if you stop paying, then the sales will vanish soon.

. In SEO, You need to budget for a few months. Once keywords will be on the first page of Google, you can get satisfied traffic for a long time.

. 90% of users like Organic results over the sponsored ones because these results are more relevant and valuable. So just imagine how many valuable customers you are losing by not focusing on organic search results.

By investing a few months in SEO, you can see drastic changes in your website internally and externally. We\'ll show you TOP Rankings in your keywords, link popularity, organic traffic and many more...

After reviewing your website , I noticed some major on-page and off-page issues need to be fixed soon. For more information about your site errors, please respond to my email.

I would be happy to provide you with a Complete Site Analysis Report (free of cost) with our Company Profile, Work Experience and Client Testimonials.

Our main AIM is customer satisfaction. We are not like others. We\'ve limited customers and make sure they are really happy with our performance.

You may be interested in Big Big Companies but I can say they\'re taking money only showing their company brand to customers; otherwise the result part is Zero. Decision is yours!

We wish you the best of luck and look forward to a long and healthy business relationship with you and your company.

Waiting for your positive response…

Best Regards,
Daniel Jason
--------------------------------------
Business Development Manager
New York 11801, USA

CONFIDENTIALITY NOTICE: This email, including any attachments, is for the sole use of the intended recipient(s) and may contain confidential and privileged information. Any unauthorized review, use or distribution is prohibited. If you are not the intended recipient, please contact the sender immediately and destroy all copies of the original message. Thank you.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-04 18:07:25',
'updated_at' => '2023-01-04 18:07:25',
),
249 => 
array (
'id' => 325,
'title' => 'chris Anderson',
'email' => 'chris10892@gmail.com',
'phone' => '07973723398',
'description' => 'Hi, I have an engagement ring from Marlows. It is a gia pear shaped diamond and was told that the number would be on the girdle. I have looked at it under a microscope and cannot see it. Where else would it be?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-04 22:43:43',
'updated_at' => '2023-01-04 22:43:43',
),
250 => 
array (
'id' => 326,
'title' => 'Andrew Butler',
'email' => 'andrew.w.butler@gmail.com',
'phone' => '07974214495',
'description' => 'Hello, I would like to come in (ideally 5th January) to look at/purchase an engagement ring.',
'custom_url' => 'https://marlows-diamonds.co.uk/product/cora',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-04 23:05:02',
'updated_at' => '2023-01-04 23:05:02',
),
251 => 
array (
'id' => 327,
'title' => 'Jonathan Tattersall',
'email' => 'jontatt88@gmail.com',
'phone' => '07534357295',
'description' => 'Hello I\'m just wondering about your options for finance , it does say your a broker but I\'m unaware the selection menu for it.

Kind regards Jonathan',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-05 02:08:38',
'updated_at' => '2023-01-05 02:08:38',
),
252 => 
array (
'id' => 328,
'title' => 'Eric Lanza',
'email' => 'ericlanzae22@gmail.com',
'phone' => '09831523806',
'description' => 'Hey there,

Hope you and your business are doing well. We\'ve all been through so much this year!

I\'m really sorry to bother you, and I know you are super busy, but I have been checking your website, and it seems that you are not ranking well for your ad words and key phrases. I actually help businesses like yours get a better ranking in google by using 10 proven techniques below.

I would really love the opportunity to work with you and your business, and bring your website to the top of Google’s list - the sweet spot where you get clicks and more business!

Please let me tell you some of the techniques that I can use below to help you get a better ranking in google search:

1. Title Tag Optimizations are missing, I can add these to your site.
2. Meta Tag Optimization descriptions are absent, I can add them too.
3. Heading Tags Optimization - No problem getting those put in there.
4. Targeted keywords are not placed into tags correctly.
5. Alt / Image tags Optimization is not present - it would take me seconds to write these.
6. Google Publisher is missing; I can set this up for you
7. Custom 404 Page is missing and I can create this for you.
8. The Products are not following Structured mark-up data, let me edit that in google webmaster tools.
9. Website Speed Development (Both Mobile and Desktop) I can make some tweaks and show you a speed performance using GTMetrics or Pingdom
10.Content Creation SEO work - As a native English speaker, I can create fantastic articles that people will want to read and share, these will bring business to you by word of mouth rather than expensive promotion via google paid search.

I\'m sorry if this sounds a little technical, but rest assured, these techniques will certainly improve you ranking in search. I am so confident that I will offer you a full refund of my fee should you not see an improvement in your google ranking within two months.

We\'ve got lots to do together to make you stand out!

Please give us the chance to work with you. You can see our rates on our website.

If this email has reached you by mistake, or if you do not wish to take advantage of this opportunity, please accept my apologies for any inconvenience caused. We are a small business and we are just trying to get some customers. I\'m sure you were in our position once too. Rest assured that we will not contact you again should you reply to this email with the word \'unsubscribe\'

Thank you kindly for your time and consideration,

Looking forward to working with you.

Kindest regard

Eric Lanza
Spread the love!',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-05 11:16:36',
'updated_at' => '2023-01-05 11:16:36',
),
253 => 
array (
'id' => 329,
'title' => 'Steven Meddings',
'email' => 'spmeddings@hotmail.com',
'phone' => '07702312691',
'description' => 'Hello, I need to get the valuations for 3 rings purchased from you to update my insurance (you did this for me last in 2020). Can I just send in the last valuation certificate up to you so you can re-issue an up to date version?
Thanks Steven Meddings',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-06 18:06:01',
'updated_at' => '2023-01-06 18:06:01',
),
254 => 
array (
'id' => 330,
'title' => 'leighanne',
'email' => 'mckinlaysjewellers@gmail.com',
'phone' => '+447724269933',
'description' => 'test',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-09 20:22:38',
'updated_at' => '2023-01-09 20:22:38',
),
255 => 
array (
'id' => 331,
'title' => 'Diljit',
'email' => 'dil_heer@hotmail.co.uk',
'phone' => '07769315701',
'description' => 'Hi, I would like to book an appointment for my engagement ring. I am planning on coming to Birmingham on Saturday 28th January if you have any availability ?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-10 02:59:36',
'updated_at' => '2023-01-10 02:59:36',
),
256 => 
array (
'id' => 332,
'title' => 'Pankaj Kalra',
'email' => 'pankajkalra2020@gmail.com',
'phone' => '0000000000',
'description' => 'Hello sir

I am a jewelry CAD model maker and can make stl files as well for you with a quick turnaround. My Prices start from $10 for an easy model.

Please let me know if you are interested.

Best Regards

Pankaj',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-10 14:41:10',
'updated_at' => '2023-01-10 14:41:10',
),
257 => 
array (
'id' => 333,
'title' => 'Donna David',
'email' => 'donnahack@hotmail.com',
'phone' => '07813110228',
'description' => 'Hello, 
I’m looking to sell my jewellery in Birmingham. Do you buy from customers? I have:
2 platinum wedding rings
1 solitaire engagement ring insured for £7000
1 solitaire necklace 
1 eternity ring 

Thank you, 
Donna',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-10 23:27:58',
'updated_at' => '2023-01-10 23:27:58',
),
258 => 
array (
'id' => 334,
'title' => 'Sophie Martin',
'email' => 'sophie.martin@tristartvstudios.co.uk',
'phone' => '01582730008',
'description' => 'F.A.O. Managing Director
We would like to feature Marlows Diamonds exclusively around top TV shows in the UK which are watched by the top 1 per cent of the richest people in the country.
Please call Sophie or Charlie on 01582-730008 or email sophie.martin@tristartvstudios.co.uk or alternatively you can contact charlie@tristartv.co.uk to discuss this in more detail.
We are an agency for ITV, Channel 4, Channel 5 and SKY.
Kind Regards,
Sophie Martin
TV Advertising Manager
Tristar TV
Tel: 01582-730008',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-12 21:04:47',
'updated_at' => '2023-01-12 21:04:47',
),
259 => 
array (
'id' => 335,
'title' => 'Janice Strachan',
'email' => 'janicestrachan1@btinternet.com',
'phone' => '07931 794542',
'description' => 'Do you sell gold pave set diamond huggie hoops? The requirements are no less than H colour, SI clarity and around .25cts.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-13 14:47:12',
'updated_at' => '2023-01-13 14:47:12',
),
260 => 
array (
'id' => 336,
'title' => 'Farhan Siddiqui',
'email' => 'farhans@ariyans.co.uk',
'phone' => '07854712656',
'description' => 'We will like to come & view .',
'custom_url' => 'https://marlows-diamonds.co.uk/live-diamond-search?gclid=EAIaIQobChMIhrTlw77E_AIVyIjVCh3zGQvAEAAYASAAEgLLmvD_BwE',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-13 17:28:33',
'updated_at' => '2023-01-13 17:28:33',
),
261 => 
array (
'id' => 337,
'title' => 'Michael',
'email' => 'mikecc500@gmail.com',
'phone' => '07818410287',
'description' => 'I’m looking at engagement rings and I could do with an idea of prices please',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-13 18:20:53',
'updated_at' => '2023-01-13 18:20:53',
),
262 => 
array (
'id' => 338,
'title' => 'Helena Woodburn',
'email' => 'helenawoodburn1@gmail.com',
'phone' => '07881375593',
'description' => 'Hello. I have a ring from your Birmingham branch (I now live in London) that my father bought in 2010. It had since been resized by M&W and over the years the diamonds have become very loose and I’d like to get it sorted. I’m looking to get a replacement band and setting for the diamonds. I am away next week but can come in the week after.  Many thanks in advance, Helena',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-14 12:53:59',
'updated_at' => '2023-01-14 12:53:59',
),
263 => 
array (
'id' => 339,
'title' => 'Susan Bray',
'email' => 'sue.bray_31@talktalk.net',
'phone' => '01425613207',
'description' => 'Please would you advise me of the width of  ring ET107 and also whether the jewellery comes with any guarantees. Thank you',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-14 16:36:40',
'updated_at' => '2023-01-14 16:36:40',
),
264 => 
array (
'id' => 340,
'title' => 'Karen carter',
'email' => 'karencarter4141@gmail.com',
'phone' => '07890585167',
'description' => 'Hi 
Looking for 3ct emerald cut diamond colour F/G
Clarity vs1 
Could you please let me know if you have anything in that matches that criteria also GIA CERTIFIED',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-15 14:44:30',
'updated_at' => '2023-01-15 14:44:30',
),
265 => 
array (
'id' => 341,
'title' => 'Lindsay Thompson',
'email' => 'lthompson@ezesoft.com',
'phone' => '07465980254',
'description' => 'Looking for a wedding ring',
'custom_url' => 'https://marlows-diamonds.co.uk/product/round-full-eternity-diamond-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-15 16:08:08',
'updated_at' => '2023-01-15 16:08:08',
),
266 => 
array (
'id' => 342,
'title' => 'Paul Quaintance',
'email' => 'paulquaintance@hotmail.com',
'phone' => '07859016858',
'description' => 'Hello, - could i make an appointment to view some rings tomorrow Tuesday 16th at 16.30 please? Many thanks',
'custom_url' => 'https://marlows-diamonds.co.uk/product/brooklyn-round-diamond-halo-with-shoulder-set-diamond-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-16 18:56:56',
'updated_at' => '2023-01-16 18:56:56',
),
267 => 
array (
'id' => 343,
'title' => 'Angel Cornelius',
'email' => 'angelcorneliusa22@gmail.com',
'phone' => '09831523806',
'description' => 'Hello,

How are you? Hope you are fine.

I have been checking your website quite often. It has seen that the main keywords are still not in the top 10 positions in Google Search. You know things about working; I mean the procedure of working has changed a lot.

So I would like to have opportunity to work for you and this time we will bring the keywords to the top 10 spots with guaranteed period.

There is no wonder that it is possible now cause, I have found out that there are few things that need to be done for better performances (Some of them we will discuss in this email). Let me tell you some of them -

1. Title Tag Optimization
2. Meta Tag Optimization (Description, keyword and etc)
3. Heading Tags Optimization
4. Targeted keywords are not placed into tags
5. Alt / Image tags Optimization
6. Google Structured Data is missing
7. Custom 404 Page is missing
8. The Products are not following Structured markup data
9. Website Loading Speed Development (Both Mobile and Desktop )
10.Off –Page SEO work

Lots are pending……………..

You can see these are the things that need to be done properly to make the keywords others to get into the top 10 spots in Google Search & your sales Increase.


Sir/ Madam, please give us a chance to fix these errors and we will give you rank on these keywords.

Please let me know if you encounter any problems or if there is anything you need. If this email has reached you by mistake or if you do not wish to take advantage of this advertising opportunity, please accept my apology for any inconvenience caused and rest assured that you will not be contacted again.

Many thanks for your time and consideration,

Looking forward

Regards

Angel Cornelius

If you do not wish to receive this again, please reply with "unsubscribe" in the subject line.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-16 19:33:04',
'updated_at' => '2023-01-16 19:33:04',
),
268 => 
array (
'id' => 344,
'title' => 'Angel Cornelius',
'email' => 'angelcorneliusa22@gmail.com',
'phone' => '09831523806',
'description' => 'Hello,

How are you? Hope you are fine.

I have been checking your website quite often. It has seen that the main keywords are still not in the top 10 positions in Google Search. You know things about working; I mean the procedure of working has changed a lot.

So I would like to have opportunity to work for you and this time we will bring the keywords to the top 10 spots with guaranteed period.

There is no wonder that it is possible now cause, I have found out that there are few things that need to be done for better performances (Some of them we will discuss in this email). Let me tell you some of them -

1. Title Tag Optimization
2. Meta Tag Optimization (Description, keyword and etc)
3. Heading Tags Optimization
4. Targeted keywords are not placed into tags
5. Alt / Image tags Optimization
6. Google Structured Data is missing
7. Custom 404 Page is missing
8. The Products are not following Structured markup data
9. Website Loading Speed Development (Both Mobile and Desktop )
10.Off –Page SEO work

Lots are pending……………..

You can see these are the things that need to be done properly to make the keywords others to get into the top 10 spots in Google Search & your sales Increase.


Sir/ Madam, please give us a chance to fix these errors and we will give you rank on these keywords.

Please let me know if you encounter any problems or if there is anything you need. If this email has reached you by mistake or if you do not wish to take advantage of this advertising opportunity, please accept my apology for any inconvenience caused and rest assured that you will not be contacted again.

Many thanks for your time and consideration,

Looking forward

Regards

Angel Cornelius

If you do not wish to receive this again, please reply with "unsubscribe" in the subject line.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-16 19:34:04',
'updated_at' => '2023-01-16 19:34:04',
),
269 => 
array (
'id' => 345,
'title' => 'Rosanaara Adam',
'email' => 'xroshx_07@hotmail.com',
'phone' => '07736649904',
'description' => 'Hi, my and my husband bought ring from you around 7 years ago and my husnad needed his resizing to be slightly bigger, is there any chance we can come in on saturday 21st, we can stay over at a hotel and pick the ring up on sunday 22nd.

Thanks',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-17 19:42:46',
'updated_at' => '2023-01-17 19:42:46',
),
270 => 
array (
'id' => 346,
'title' => 'Sachin M.',
'email' => 'sachindigiuk2@gmail.com',
'phone' => '9140068238',
'description' => 'Hello, I see you are doing Google ads PPC for your online store. Are you getting conversions or Losing Money on the table? 


We have great and proven experience in eCommerce store optimization. We help to grow sales and conversions organically for eCommerce stores.


My proven eCommerce client\'s growth experience- https://sinfytech.com/shopify-results


We don\'t take upfront payment. My pricing page: https://sinfytech.com/seo-pricing          


I\'m confident we\'ll produce outstanding results. If you want to know how I can grow your eCommerce store.


Reach me through WhatsApp- https://wa.me/919140068238          


Messenger- http://m.me/sinfytech          


Thank You.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-18 13:16:11',
'updated_at' => '2023-01-18 13:16:11',
),
271 => 
array (
'id' => 347,
'title' => 'Charles COKER',
'email' => 'charlescoker@gmail.com',
'phone' => '07772155004',
'description' => 'Hi there, best to contact via email if possible please.
I saw a ring a few months ago with my partner and I think it is exactly the style that she would like for an engagement ring. I never got the opportunity to go back to the shop and I think the ring is now gone but I think I\'d like to try and replicate something like it. I\'m looking for for 3 x emerald cut diamonds. I\'m not entirely sure size and quality they were. It was a vintage ring so not sure if that impacts the price etc too, however it was around £2500.
I imagine they were around 0.5 or 0.6.
So I don\'t know how realistic this is but I\'m looking for 3 x emerald cut diamonds of similar size to put together on a ring and looking to spend around £2000 - 3000.

Hope you can help advise, I live an hour from Birmingham so would theoretically be able to visit.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-18 14:30:35',
'updated_at' => '2023-01-18 14:30:35',
),
272 => 
array (
'id' => 348,
'title' => 'David Robert Montgomery',
'email' => 'DM_515@HOTMAIL.COM',
'phone' => '07568108018',
'description' => 'I am interested in AUTUMN | Six Claw Raised Setting Solitaire Engagement Ring 3ct

Is it possible to get one for valitines day and how much?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-18 20:55:35',
'updated_at' => '2023-01-18 20:55:35',
),
273 => 
array (
'id' => 349,
'title' => 'Rosa',
'email' => 'rosa.hargrave@yahoo.co.uk',
'phone' => '07977000801',
'description' => 'PHOENIX | Wide Band Princess cut Solitaire Ring, looking to buy',
'custom_url' => 'https://marlows-diamonds.co.uk/product/phoenix-wide-band-princess-cut-solitaire-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-18 21:58:32',
'updated_at' => '2023-01-18 21:58:32',
),
274 => 
array (
'id' => 350,
'title' => 'Freya Chilton',
'email' => 'freyachilton@hotmail.co.uk',
'phone' => '07535542130',
'description' => 'Hi there, 

I am currently ring shopping with my partner. 

I am looking for a lab grown emerald cut diamond to the following specifications:

Colour: D-E
Clarity: VVS2 or higher
Cut: ideal or excellent
Girdle: Thin – Slightly Thick
Table: 61-68%
Depth:60-65%
Polish/Symmetry: excellent or very good 
Carat: 2.5 or above
Reports: GIA and tests as a diamond

Would you be able to let me know what you have that may be suitable and their prices? We are able to visit the London or Birmingham store although London would be preferable. 

Many thanks, 
Freya',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-19 17:45:59',
'updated_at' => '2023-01-19 17:45:59',
),
275 => 
array (
'id' => 351,
'title' => 'Allerie De Leon',
'email' => 'yourdomainguru.allerie@gmail.com',
'phone' => '+189274825',
'description' => 'Good day. This is Allerie from TDS. We have a domain that is currently on sale that you might be interested in - BeautifulDiamondRings.com

Whenever someone types Beautiful Diamond Rings, Diamond Rings, The Best Diamond Rings, or any other phrase with these keywords into their browser, your site could be the first one they see!

The internet is the most efficient way to acquire new customers

Avg Google Search Results for this domain is: 61,200,000
You can easily redirect all the traffic this domain gets to your current site!

GoDaddy.com appraises this domain at $1,050. 

Priced at only $998 for a limited time! If interested, please go to BeautifulDiamondRings.com and select Buy Now, or purchase directly at  GoDaddy.   
Act Fast! The first person to select Buy Now gets it!  

Thank you very much for your time.
Best Regards,
Allerie De Leon',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-19 19:59:23',
'updated_at' => '2023-01-19 19:59:23',
),
276 => 
array (
'id' => 352,
'title' => 'Allerie De Leon',
'email' => 'yourdomainguru.allerie8@gmail.com',
'phone' => '6723718457',
'description' => 'Good day. This is Allerie from TDS. We have a domain that is currently on sale that you might be interested in - BeautifulDiamondRings.com

Whenever someone types Beautiful Diamond Rings, Diamond Rings, The Best Diamond Rings, or any other phrase with these keywords into their browser, your site could be the first one they see!

The internet is the most efficient way to acquire new customers

Avg Google Search Results for this domain is: 61,200,000
You can easily redirect all the traffic this domain gets to your current site!

GoDaddy.com appraises this domain at $1,050. 

Priced at only $998 for a limited time! If interested, please go to BeautifulDiamondRings.com and select Buy Now, or purchase directly at  GoDaddy.   
Act Fast! The first person to select Buy Now gets it!  

Thank you very much for your time.
Best Regards,
Allerie De Leon',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-19 20:00:43',
'updated_at' => '2023-01-19 20:00:43',
),
277 => 
array (
'id' => 353,
'title' => 'Mark Grain',
'email' => 'mark_grain@hotmail.com',
'phone' => '07904871446',
'description' => 'Hi I am looking to purchase an engagement ring but would like to bring my partner to try afew if possible. Thanks',
'custom_url' => 'https://marlows-diamonds.co.uk/product/joy-high-set-oval-diamond-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-23 02:24:31',
'updated_at' => '2023-01-23 02:24:31',
),
278 => 
array (
'id' => 354,
'title' => 'Mark Grain',
'email' => 'mark_grain@hotmail.com',
'phone' => '07904871446',
'description' => 'Hi could I please book and appointment for my partner and I to have a look at your engagement rings. Thanks mark.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-23 02:32:18',
'updated_at' => '2023-01-23 02:32:18',
),
279 => 
array (
'id' => 355,
'title' => 'RUCHIT CHANDARANA',
'email' => 'sales@paldiam.in',
'phone' => '08976520221',
'description' => 'Dear Sir/Madam,
This is Ruchit from PAL DIAM
We are Lab Grown Diamond Manufacturer Company In INDIA and HONGKONG

We do have inventory in RBC and Fancy Shapes  IGI
We have size from 0.50ct to 6ct we have 500+ stones 

We also have our website only for Lab Grown diamonds with API link
If you have any portal or website we would love to upload our Stock on it

If you have any demand please let me know
we can try to give you best price from market

WhatsApp No :- +91 8976520221/9326925671
Email Id :- sales@paldiam.in
Website :- www.paldiam.in
Rapnet - 121724',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-23 12:57:33',
'updated_at' => '2023-01-23 12:57:33',
),
280 => 
array (
'id' => 356,
'title' => 'Ourania Varsou',
'email' => 'o.varsou@googlemail.com',
'phone' => '07747033612',
'description' => 'i am interested in purchasing a solitaire platinum ring with a 1ct lab-grown diamond and was wondering if you offer video appointments please? Many thanks.',
'custom_url' => 'https://marlows-diamonds.co.uk/product/destiny-split-shoulder-oval-shaped-solitaire-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-24 04:47:12',
'updated_at' => '2023-01-24 04:47:12',
),
281 => 
array (
'id' => 357,
'title' => 'Sam Steel',
'email' => 'samksteel@hotmail.com',
'phone' => '07976567264',
'description' => 'Hi,

I have purchased all of my wife\'s jewellery from you.
I am interested in purchasing a Floating Diamond Eternity Ring in Yellow Gold. I believe the ring size is J, but I can bring an existing ring in to compare. It could be a full or half ring of diamonds. Is this something that you would tend to have in stock if I came to the shop? Could you give me an approximate price range for this?

Kind regards,

Sam',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-25 13:24:35',
'updated_at' => '2023-01-25 13:24:35',
),
282 => 
array (
'id' => 358,
'title' => 'Sharon Pinder',
'email' => 'sharonjames589@yahoo.co.uk',
'phone' => '075979335297',
'description' => 'Please could you tell me the width of the SADIE eternity ring? I purchased my engagement ring from you and I’m not too sure if , put together, they will be too much. Thank you so much',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-25 15:27:04',
'updated_at' => '2023-01-25 15:27:04',
),
283 => 
array (
'id' => 359,
'title' => 'ANISH BHANSALI',
'email' => 'Anish@kbscreations.com',
'phone' => '+91 9820224870',
'description' => 'Hi. We are manufacturers if Lab grown HPHT and CVD Diamonds ranging from 0.005ct to 5 ct in size in various shapes. I would like to pitch in our product to your procurement team. Can you please guide me who I should get in touch with?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-27 17:01:24',
'updated_at' => '2023-01-27 17:01:24',
),
284 => 
array (
'id' => 360,
'title' => 'Eric Lanza',
'email' => 'ericlanzae22@gmail.com',
'phone' => '09831523806',
'description' => 'Hey there,

Hope you and your business are doing well. We\'ve all been through so much this year!

I\'m really sorry to bother you, and I know you are super busy, but I have been checking your website, and it seems that you are not ranking well for your ad words and key phrases. I actually help businesses like yours get a better ranking in google by using 10 proven techniques below.

I would really love the opportunity to work with you and your business, and bring your website to the top of Google’s list - the sweet spot where you get clicks and more business!

Please let me tell you some of the techniques that I can use below to help you get a better ranking in google search:

1. Title Tag Optimizations are missing, I can add these to your site.
2. Meta Tag Optimization descriptions are absent, I can add them too.
3. Heading Tags Optimization - No problem getting those put in there.
4. Targeted keywords are not placed into tags correctly.
5. Alt / Image tags Optimization is not present - it would take me seconds to write these.
6. Google Publisher is missing; I can set this up for you
7. Custom 404 Page is missing and I can create this for you.
8. The Products are not following Structured mark-up data, let me edit that in google webmaster tools.
9. Website Speed Development (Both Mobile and Desktop) I can make some tweaks and show you a speed performance using GTMetrics or Pingdom
10.Content Creation SEO work - As a native English speaker, I can create fantastic articles that people will want to read and share, these will bring business to you by word of mouth rather than expensive promotion via google paid search.

I\'m sorry if this sounds a little technical, but rest assured, these techniques will certainly improve you ranking in search. I am so confident that I will offer you a full refund of my fee should you not see an improvement in your google ranking within two months.

We\'ve got lots to do together to make you stand out!

Please give us the chance to work with you. You can see our rates on our website.

If this email has reached you by mistake, or if you do not wish to take advantage of this opportunity, please accept my apologies for any inconvenience caused. We are a small business and we are just trying to get some customers. I\'m sure you were in our position once too. Rest assured that we will not contact you again should you reply to this email with the word \'unsubscribe\'

Thank you kindly for your time and consideration,

Looking forward to working with you.

Kindest regard

Eric Lanza
Spread the love!',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-27 19:07:02',
'updated_at' => '2023-01-27 19:07:02',
),
285 => 
array (
'id' => 361,
'title' => 'Eric Lanza',
'email' => 'ericlanzae22@gmail.com',
'phone' => '09831523806',
'description' => 'Hey there,

Hope you and your business are doing well. We\'ve all been through so much this year!

I\'m really sorry to bother you, and I know you are super busy, but I have been checking your website, and it seems that you are not ranking well for your ad words and key phrases. I actually help businesses like yours get a better ranking in google by using 10 proven techniques below.

I would really love the opportunity to work with you and your business, and bring your website to the top of Google’s list - the sweet spot where you get clicks and more business!

Please let me tell you some of the techniques that I can use below to help you get a better ranking in google search:

1. Title Tag Optimizations are missing, I can add these to your site.
2. Meta Tag Optimization descriptions are absent, I can add them too.
3. Heading Tags Optimization - No problem getting those put in there.
4. Targeted keywords are not placed into tags correctly.
5. Alt / Image tags Optimization is not present - it would take me seconds to write these.
6. Google Publisher is missing; I can set this up for you
7. Custom 404 Page is missing and I can create this for you.
8. The Products are not following Structured mark-up data, let me edit that in google webmaster tools.
9. Website Speed Development (Both Mobile and Desktop) I can make some tweaks and show you a speed performance using GTMetrics or Pingdom
10.Content Creation SEO work - As a native English speaker, I can create fantastic articles that people will want to read and share, these will bring business to you by word of mouth rather than expensive promotion via google paid search.

I\'m sorry if this sounds a little technical, but rest assured, these techniques will certainly improve you ranking in search. I am so confident that I will offer you a full refund of my fee should you not see an improvement in your google ranking within two months.

We\'ve got lots to do together to make you stand out!

Please give us the chance to work with you. You can see our rates on our website.

If this email has reached you by mistake, or if you do not wish to take advantage of this opportunity, please accept my apologies for any inconvenience caused. We are a small business and we are just trying to get some customers. I\'m sure you were in our position once too. Rest assured that we will not contact you again should you reply to this email with the word \'unsubscribe\'

Thank you kindly for your time and consideration,

Looking forward to working with you.

Kindest regard

Eric Lanza
Spread the love!',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-27 19:27:04',
'updated_at' => '2023-01-27 19:27:04',
),
286 => 
array (
'id' => 362,
'title' => 'Karl Maddock',
'email' => 'karl@karlmaddock.co.uk',
'phone' => '01258453902',
'description' => 'Hi,

Your company may be interested in a domain that recently became available and we are now selling in your sector:

BirminghamJewellers.co.uk

The domain is easy to remember and could be used alongside your existing domain to help increase your online traffic. The keywords get searched 1600+ times a month in google and having the keywords in the domain will help it rank. It is very descriptive and will help bring in extra traffic and business.

This is one of the best domains in this sector, we are contacting a few companies that might be interested. The asking price is £500 please let me know if you have any questions?

If you would like to purchase please let me know and i will send more details.

Karl Maddock

- This is a relevant  B2B email advertisement being sent to the company - Please reply with STOP if you no longer want to receive messages from us in the future.
-Domain sold on a first come first served basis',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-27 20:36:36',
'updated_at' => '2023-01-27 20:36:36',
),
287 => 
array (
'id' => 363,
'title' => 'James Okoli',
'email' => 'jamesokoli10@hotmail.co.uk',
'phone' => '07503384102',
'description' => 'Hi there would like to talk this through if possible',
'custom_url' => 'https://marlows-diamonds.co.uk/product/destiny-split-shoulder-oval-shaped-solitaire-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-28 07:35:15',
'updated_at' => '2023-01-28 07:35:15',
),
288 => 
array (
'id' => 364,
'title' => 'Rida Azam',
'email' => 'ridaazam@hotmail.com',
'phone' => '07425167890',
'description' => 'Looking for an engagement ring',
'custom_url' => 'https://marlows-diamonds.co.uk/product/bailie-emerald-cut-halo-with-pave-shoulder-set-diamond-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-29 02:48:18',
'updated_at' => '2023-01-29 02:48:18',
),
289 => 
array (
'id' => 365,
'title' => 'Rida Azam',
'email' => 'ridaazam@hotmail.com',
'phone' => '07425167890',
'description' => 'Hi please may I book an appointment in for Sunday',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-29 02:54:45',
'updated_at' => '2023-01-29 02:54:45',
),
290 => 
array (
'id' => 366,
'title' => 'Mrs GEORGINA CLEWES',
'email' => 'ninaclewes@gmail.com',
'phone' => '07814215337',
'description' => 'Do we need an appointment for Sunday 5th Feb or can we walk in. Looking for diamond engagement  ring - solitaire, shoulder set',
'custom_url' => 'https://marlows-diamonds.co.uk/product/kinley-new-channel-shoulder-set-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-30 00:18:28',
'updated_at' => '2023-01-30 00:18:28',
),
291 => 
array (
'id' => 367,
'title' => 'Angie Osborn',
'email' => 'angieosborn@btinternet.com',
'phone' => '07813656550',
'description' => 'I have one half of my mother\'s full eternity ring with the diamonds set into either white gold or possibly platinum.  I had the rest of the diamonds set into a half eternity ring for myself.  I would like to sell this other half now, do I need an appointment?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-01-31 22:30:42',
'updated_at' => '2023-01-31 22:30:42',
),
292 => 
array (
'id' => 368,
'title' => 'Gary Sammons',
'email' => 'Sammgar87@gmail.com',
'phone' => '07807939899',
'description' => 'Hi there we are looking to come to JQ on Saturday to look at getting our wedding bands, I bought our engagement ring from Marlows oringally. Do we need to make an appointment for this Saturday?

Gary',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-01 01:58:23',
'updated_at' => '2023-02-01 01:58:23',
),
293 => 
array (
'id' => 369,
'title' => 'Kristian baker',
'email' => 'kristianbaker@me.com',
'phone' => '07773348924',
'description' => 'Hello. I purchased a platinum wedding ring from yourselves. Wondering if buy platinum back.  Not sure I trust all these online places.

Thank you.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-01 15:12:33',
'updated_at' => '2023-02-01 15:12:33',
),
294 => 
array (
'id' => 370,
'title' => 'Eva Rose',
'email' => 'ewulik@hotmail.com',
'phone' => '07842899776',
'description' => 'Dear all, 

I bought a lab diamond from you before and I\'d like to upgrade it to a bigger size. I\'ve got all the original documents / certificate.

Could you please give me a call regarding options?

Many thanks, 
Eva',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-01 19:42:58',
'updated_at' => '2023-02-01 19:42:58',
),
295 => 
array (
'id' => 371,
'title' => 'Nik',
'email' => 'koutshs.nikos@gmail.com',
'phone' => '07909195302',
'description' => 'Hi,  I\'m looking to buy an engagement ring and I saw on your main page that there are discounts up to 30%. I can\'t find any discounts when I put my ring in the basket though. Am I missing anything? Thanks, Nik',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-02 04:28:15',
'updated_at' => '2023-02-02 04:28:15',
),
296 => 
array (
'id' => 372,
'title' => 'Paul',
'email' => 'Paulandkashelle1@sky.com',
'phone' => '07483033222',
'description' => 'Hi, I purchased my wife’s diamond ring from you many years ago and she is looking to upgrade? Do you buy back the diamond/platinum ring, I still have all the paper work? Kind regards',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-02 19:09:18',
'updated_at' => '2023-02-02 19:09:18',
),
297 => 
array (
'id' => 373,
'title' => 'kurtis james',
'email' => 'kurtis23bjames@outlook.com',
'phone' => '07498655646',
'description' => 'looking for wedding bands',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-02 20:52:50',
'updated_at' => '2023-02-02 20:52:50',
),
298 => 
array (
'id' => 374,
'title' => 'Sara',
'email' => 'saaazk@hotmail.co.uk',
'phone' => '07557097840',
'description' => 'saaazk@hotmail.co.uk',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-03 00:00:11',
'updated_at' => '2023-02-03 00:00:11',
),
299 => 
array (
'id' => 375,
'title' => 'Kimberly Brown-Eakes',
'email' => 'kabrown2121@yahoo.com',
'phone' => '843-743-9850',
'description' => 'Hi,  I\'m in the USA and was interested in purchasing the Diamond Drop Earrings | Round Cut | D_S016, 18ct white gold.  Are you able to calculate shipping for me?  My address is:
63 Winding Oak Dr.
Arden, NC 28704

Thank you, Kim',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-03 23:26:15',
'updated_at' => '2023-02-03 23:26:15',
),
300 => 
array (
'id' => 376,
'title' => 'Alex Robbins',
'email' => 'robbins.ajr@gmail.com',
'phone' => '+529843110914',
'description' => 'Hi! I want to get the Layla ring in white gold, with a central diamond of 1-1.2ct.

I am currently living in Mexico, so I am unable to come to the store until April. 

The current price of around £1500 is ideally what I want to spend, is there any way you can help me out and keep this price after the sale please?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-07 17:13:31',
'updated_at' => '2023-02-07 17:13:31',
),
301 => 
array (
'id' => 377,
'title' => 'Jerrine Salise',
'email' => 'jerrine_mds@yahoo.co.uk',
'phone' => '07538400641',
'description' => 'Hello, we would like to visit the London Knightsbridge store on Saturday 11th - please could you confirm if we have to make an appointment or can we just walk in?

Thank you.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-08 04:03:20',
'updated_at' => '2023-02-08 04:03:20',
),
302 => 
array (
'id' => 378,
'title' => 'Jerrine Salise',
'email' => 'jerrine_mds@yahoo.co.uk',
'phone' => '07538400641',
'description' => 'Hello, we would like to look at wedding rings on Sat 11th Feb. Please could you confirm if we need to book an appointment. 

Thank you.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-08 04:06:31',
'updated_at' => '2023-02-08 04:06:31',
),
303 => 
array (
'id' => 379,
'title' => 'Joseph Adu-Mfum',
'email' => 'josephadumfum@gmail.com',
'phone' => '07495068066',
'description' => 'I am looking for a princess cut diamonds with stones in the band preferably claw set',
'custom_url' => 'https://marlows-diamonds.co.uk/product/iris-princess-cut-channel-set-wide-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-08 21:15:58',
'updated_at' => '2023-02-08 21:15:58',
),
304 => 
array (
'id' => 380,
'title' => 'Louise Kitson',
'email' => 'louisejkitson@gmail.com',
'phone' => '07985190650',
'description' => 'Hello, my partner bought me a engagement ring however it needs resizing as is too small. Can we bring it back for resizing?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-09 12:18:34',
'updated_at' => '2023-02-09 12:18:34',
),
305 => 
array (
'id' => 381,
'title' => 'Jonathan',
'email' => 'jc_oasis@hotmail.com',
'phone' => '07875703839',
'description' => 'Dear Sir/Madam 
I\'m interested in the Athena shoulder set diamond ring, in 18k yellow gold. I\'d like mined diamonds in the ring but im not sure about diamond size and I\'m also not sure what size ring she will need as I want it to be a surprise but she\'s petite with slender hands so I was thinking on getting an average size so it will fit for photos ect and get it resized after if needed?
Any help would be appreciated?
Kind regards 
Jonathan',
'custom_url' => 'https://marlows-diamonds.co.uk/product/athena-channel-shoulder-set-diamond-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-09 21:14:20',
'updated_at' => '2023-02-09 21:14:20',
),
306 => 
array (
'id' => 382,
'title' => 'Niamh Bowe',
'email' => 'niamhnibuadhaigh@gmail.com',
'phone' => '07562739656',
'description' => 'Dear team,
We are in Birmingham from the 17th -19th of February to shop for engagement rings and we would be interested in booking an appointment to see your lab diamond rings. Do you have availability during this period for an appointment?
All the best,
Niamh Bowe',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-10 01:21:41',
'updated_at' => '2023-02-10 01:21:41',
),
307 => 
array (
'id' => 383,
'title' => 'Christina Doyle',
'email' => 'doylechristina76@gmail.com',
'phone' => '07749821551',
'description' => 'Hi we purchased an engagement ring from yourselves last year, our insurance policy states that the ring has to be inspected on an annual basis, is this something you can assist with.  Is there a charge.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-10 03:07:06',
'updated_at' => '2023-02-10 03:07:06',
),
308 => 
array (
'id' => 384,
'title' => 'Nicola Woolerton',
'email' => 'nikkiwooly2835@gmail.com',
'phone' => '07787171861',
'description' => 'I had my wedding and engagement rings from you back in 2016. I feel they could do with a professional clean. I have done this myself, gently with soap and water, but being a hairdresser they get alot if product on them.
Also the clasps holding the main stone in the engagement ring seem  to catch on everything, and need adjusting? 
Is this a service you offer?  And what would be the cost of this service?  Thankyou  .',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-11 13:12:52',
'updated_at' => '2023-02-11 13:12:52',
),
309 => 
array (
'id' => 385,
'title' => 'Jonathan',
'email' => 'jc_oasis@hotmail.com',
'phone' => '07875703839',
'description' => 'Dear Sir/Madam 
I\'m interested in the Athena shoulder set diamond ring, in 18k yellow gold. I\'d like mined diamonds in the ring but im not sure about diamond size and I\'m also not sure what size ring she will need as I want it to be a surprise but she\'s petite with slender hands so I was thinking on getting an average size so it will fit for photos ect and get it resized after if needed?
Any help would be appreciated?
Kind regards 
Jonathan',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-12 02:27:59',
'updated_at' => '2023-02-12 02:27:59',
),
310 => 
array (
'id' => 386,
'title' => 'Charlie timberlake',
'email' => 'charlie_timberlake@hotmail.co.uk',
'phone' => '07596943139',
'description' => 'Looking to buy an engagement ring. Could I please book an appointment to come and see them',
'custom_url' => 'https://marlows-diamonds.co.uk/product/athena-channel-shoulder-set-diamond-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-12 19:06:36',
'updated_at' => '2023-02-12 19:06:36',
),
311 => 
array (
'id' => 387,
'title' => 'Alex',
'email' => 'alexanderbooker@outlook.com',
'phone' => '+852 92685939',
'description' => 'Hello,

I was looking at the Diamond Tennis Bracelet | D_S005 (18ct white gold lab grown 3 carat) the other day and saw the price quoted was a lot cheaper than the one given now (now £2667). I am just wondering if there was some sale on that I missed? Or will there be another one soonish?

https://marlows-diamonds.co.uk/product/diamond-tennis-bracelet-d-s005

I am very interested in the above mentioned product for an upcoming birthday for my partner.

Many thanks,

Alex',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-13 12:10:46',
'updated_at' => '2023-02-13 12:10:46',
),
312 => 
array (
'id' => 388,
'title' => 'Michael White',
'email' => 'mike_white93@hotmail.co.uk',
'phone' => '07809247922',
'description' => 'Hello, I am looking to come to Birmingham Saturday morning ( 18/2/23). I was wondering how much stock you have of cushion diamonds for an engagement ring of around 2k-2.5k. (platinum ring, not sure on shoulder or solitaire design).

Thank you',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-13 16:44:34',
'updated_at' => '2023-02-13 16:44:34',
),
313 => 
array (
'id' => 389,
'title' => 'sadiya patel',
'email' => 'sadiyaaa08@hotmail.com',
'phone' => '07909513391',
'description' => 'looking for an engagemnt ring',
'custom_url' => 'https://marlows-diamonds.co.uk/product/rosie-emerald-cut-diamond-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-14 03:55:50',
'updated_at' => '2023-02-14 03:55:50',
),
314 => 
array (
'id' => 390,
'title' => 'Glen Parry',
'email' => 'glenmarketinglondon@gmail.com',
'phone' => '9319435889',
'description' => '"Hi, my name is Glen and work for an e-commerce marketing agency here in the UK (Cardiff to be precise)
I want to keep this email short and to the point, we’ve run some initial analysis on your website and noticed a few items
That are almost certainly hurting your ability to rank well with Google.

If you are open to making some adjustments and growing your online footprint is on the agenda for 2023 we really think you can dramatically improve your Google ranking, and the overall effectiveness of your website.

I\'d like to set up a Free & no obligation full analysis on your site that I know you will find very interesting and very helpful.

Can I arrange a call with one of my guys here? I really think there’s some solid opportunities for growth here.

I look forward to hearing from you.

Cheers,
Name: - Glen Parry
Email: - glenmarketinglondon@gmail.com',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-14 11:50:58',
'updated_at' => '2023-02-14 11:50:58',
),
315 => 
array (
'id' => 391,
'title' => 'Glen Parry',
'email' => 'glenmarketinglondon@gmail.com',
'phone' => '9319435889',
'description' => '"Hi, my name is Glen and work for an e-commerce marketing agency here in the UK (Cardiff to be precise)
I want to keep this email short and to the point, we’ve run some initial analysis on your website and noticed a few items
That are almost certainly hurting your ability to rank well with Google.

If you are open to making some adjustments and growing your online footprint is on the agenda for 2023 we really think you can dramatically improve your Google ranking, and the overall effectiveness of your website.

I\'d like to set up a Free & no obligation full analysis on your site that I know you will find very interesting and very helpful.

Can I arrange a call with one of my guys here? I really think there’s some solid opportunities for growth here.

I look forward to hearing from you.

Cheers,
Name: - Glen Parry
Email: - glenmarketinglondon@gmail.com',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-14 11:52:35',
'updated_at' => '2023-02-14 11:52:35',
),
316 => 
array (
'id' => 392,
'title' => 'Ronan Sandford',
'email' => 'sandforr@tcd.ie',
'phone' => '07877898317',
'description' => 'Hi there, I was in with you on Saturday with my fiancé, Jenni (the Irish couple before the rugby). I am looking to get Jenni a tennis bracelet for her upcoming 30th, budget of c.£2k. Would it be possible to call in for 6:30 /7pm on Thursday to view what you have? I see it says you’re open until 9 which would be great if possible at all. 

Kind regards 

Ronan',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-14 15:24:32',
'updated_at' => '2023-02-14 15:24:32',
),
317 => 
array (
'id' => 393,
'title' => 'Farah Master',
'email' => 'Farah_m07@hotmail.co.uk',
'phone' => '07528368378',
'description' => 'Hi. I purchased my ring from you about 7 years ago. However I need my ring re-sizing. I am currently living in Dubai so will be getting it resized here however they\'re asking for what type of platinum was used. I am not sure whether you have on record this information as I need to pass this over to them? It was purchased by my husband ishfaq Vaja so I\'m not sure if it would be under his name or mine. Thanks',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-15 11:40:26',
'updated_at' => '2023-02-15 11:40:26',
),
318 => 
array (
'id' => 394,
'title' => 'Myuran',
'email' => 'myuranm@gmail.com',
'phone' => '07825372070',
'description' => 'Women\'s Diamond Eternity Ring | ET110

I bought my engagement ring from you and would like to get a wedding band for my wife too please.',
'custom_url' => 'https://marlows-diamonds.co.uk/product/women-s-diamond-eternity-ring-et110',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-17 02:07:23',
'updated_at' => '2023-02-17 02:07:23',
),
319 => 
array (
'id' => 395,
'title' => 'Lara mehta',
'email' => 'larasalem@hotmail.com',
'phone' => '07841698306',
'description' => 'I would like to view full eternity rings please in yellow gold. 
Could I have an appointment for 12pm on this Wednesday 22nd February. 
Thank you',
'custom_url' => 'https://marlows-diamonds.co.uk/product/round-full-eternity-diamond-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-19 06:20:11',
'updated_at' => '2023-02-19 06:20:11',
),
320 => 
array (
'id' => 396,
'title' => 'Bryony Taylor',
'email' => 'bryonymorley@yahoo.co.uk',
'phone' => '07914391402',
'description' => 'Hi there,
I purchased a platinum diamond eternity ring in April 2022 at your Birmingham store. I have recently noticed what looks like a scratch or crack on one of the diamonds. Could i please make an appointment to bring it in to be looked at/fixed?
The order number on the receipt is 19177.
Many thanks,
Bryony',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-21 20:41:47',
'updated_at' => '2023-02-21 20:41:47',
),
321 => 
array (
'id' => 397,
'title' => 'Callum Buchanan',
'email' => 'cbuchananmusic@gmail.com',
'phone' => '07399429565',
'description' => 'Good evening, I will be in London on Monday 27th searching for the perfect engagement ring for my girlfriend. I have several appointments booked at various jewellers and I was wondering whether I could fit you in as well? What time do you close please?

Regards

Callum',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-25 00:59:08',
'updated_at' => '2023-02-25 00:59:08',
),
322 => 
array (
'id' => 398,
'title' => 'Bahrum Karimi-Ghovanlou',
'email' => 'karimib83@hotmail.co.uk',
'phone' => '07857403896',
'description' => 'Hi, I ordered an engagement ring on 30th Jan, I haven\'t received any further info on this order since then, wondering if someone could let me know on its progress please, reference order number was 31104. Thanks.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-02-27 17:38:26',
'updated_at' => '2023-02-27 17:38:26',
),
323 => 
array (
'id' => 399,
'title' => 'Catherine Biffin',
'email' => 'katie.ward87@hotmail.co.uk',
'phone' => '07402008124',
'description' => 'My husband bought my engagement ring from you 5 years ago. Our insurance company has requested I get it revalued. Is this something you are able to help with? Thank you for your assistance.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-01 17:20:38',
'updated_at' => '2023-03-01 17:20:38',
),
324 => 
array (
'id' => 400,
'title' => 'Lawrence Stigner',
'email' => 'lawrence.stigner@live.co.uk',
'phone' => '07929254099',
'description' => 'Good afternoon, on Saturday 11th March we are shopping the jewellery quarter for  a round cut lab-grown solitaire diamond around 1ct on a platinum ring. Do you have any availability for an appointment at 14:15 onwards? Thanks,',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-01 18:31:45',
'updated_at' => '2023-03-01 18:31:45',
),
325 => 
array (
'id' => 401,
'title' => 'Mirko De Montis',
'email' => 'mirkodemontis@gmail.com',
'phone' => '0782129281',
'description' => 'Hi - I would like to arrange an on-site visit at your shop. Interested in a gold ring+lab diamond and curious to see options in person.',
'custom_url' => 'https://marlows-diamonds.co.uk/product/addison-slim-twist-set-diamond-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-02 01:27:54',
'updated_at' => '2023-03-02 01:27:54',
),
326 => 
array (
'id' => 402,
'title' => 'Courtney Downey',
'email' => 'courtneydowney3@gmail.com',
'phone' => '07901655692',
'description' => 'Would like to see the Dylan solitaire engagement ring with 1 carat lab grown diamond if possible.',
'custom_url' => 'https://marlows-diamonds.co.uk/product/dylan-emerald-cut-tapering-band-diamond-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-02 17:35:32',
'updated_at' => '2023-03-02 17:35:32',
),
327 => 
array (
'id' => 403,
'title' => 'Sam Akhter',
'email' => 'm_sam_a@hotmail.com',
'phone' => '07737171336',
'description' => 'Please can I book an appointment for 04/03/2023 @ 4.00pm?

I am looking for Diamond engagement ring - Budget £1500. Platinum, Lab grown only, yellow pear shape stone in a Bezel or Halo.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-02 22:05:18',
'updated_at' => '2023-03-02 22:05:18',
),
328 => 
array (
'id' => 404,
'title' => 'Jagdish Bhalala',
'email' => 'jagdishb@hk.co',
'phone' => '00919930385413',
'description' => 'My name is Jagdish Bhalala, and I represent Hari Krishna Exports, a leading manufacturer of natural diamonds. We offer access to our online inventory of over 50,000+ diamonds and strive to provide our clients with exceptional quality and competitive prices.
We would like to offer our services to your company and provide you with access to our online inventory. Our diamonds are sourced from the finest mines and are polished to ensure exceptional quality and beauty. We are confident that our collection will meet your needs and provide your customers with a wide range of options to choose from.
If you\'re interested in partnering with us, please let us know, and we\'ll be happy to provide you with more information about our services and answer any questions you may have. Alternatively, you can reach out to Dhruv on WhatsApp/Phone at +91 99303 85413. He will brief you and resolve any questions that you might have.
Thank you for your time, and we look forward to the opportunity of doing business with you.

Best regards,
Jagdish Bhalala,
Hari Krishna Exports',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-03 15:55:25',
'updated_at' => '2023-03-03 15:55:25',
),
329 => 
array (
'id' => 405,
'title' => 'Mila',
'email' => 'pastelvxbes222425@gmail.com',
'phone' => '0779877755',
'description' => 'Hello. I really like your rings.',
'custom_url' => 'https://marlows-diamonds.co.uk/product/rare-old-unheated-ceylon-sapphire-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-03 15:57:35',
'updated_at' => '2023-03-03 15:57:35',
),
330 => 
array (
'id' => 406,
'title' => 'Charolette Danzig',
'email' => 'charolette.danzig@mentmail.com',
'phone' => '0000000000',
'description' => 'Good Day!

Might you be interested in collaborating on advertising placements? I work with clients who are interested in publishing guest articles (written by me) containing a relevant do-follow link.

I also have several clients who prefer to add such links to existing articles, usually within a list of useful resources at the foot of the article.

Are either or both areas in which we could work together? If so, can you advise on pricing information?

I look forward to hearing back from you.

Kind regards,
Charolette',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-04 12:53:31',
'updated_at' => '2023-03-04 12:53:31',
),
331 => 
array (
'id' => 407,
'title' => 'Jess Sidwell',
'email' => 'jessica.elizabeth.sidwell@gmail.com',
'phone' => '07901918364',
'description' => 'Hi there,

I\'d like to book an appointment on Monday 13th please to look at an engagement ring. The style I\'ve seen on your website that I like is the Addison. We may also want to look at wedding rings too. 

We\'ll be travelling from Leicester to Birmingham, so an afternoon appointment would be preferable. 

I look forward to hearing from you.

Thanks, 
Jess',
'custom_url' => 'https://marlows-diamonds.co.uk/product/addison-slim-twist-set-diamond-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-06 18:30:13',
'updated_at' => '2023-03-06 18:30:13',
),
332 => 
array (
'id' => 408,
'title' => 'Nicola Gibson',
'email' => 'nicola.todd1990@gmail.com',
'phone' => '07539924879',
'description' => 'Hi, my engagement ring and wedding band are both from your shop. However, having put on some weight since I got married I am unable to get them off and so I think they need to be cut and resized. Are you able to help with both?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-07 03:02:03',
'updated_at' => '2023-03-07 03:02:03',
),
333 => 
array (
'id' => 409,
'title' => 'James Barlow',
'email' => 'jamesbarlow80@hotmail.com',
'phone' => '+44 7876 398187',
'description' => 'Hello,

We purchased our engagement wedding rings from yourself sometime ago! I would like to arrange to get these cleaned and my wife’s engagement and wedding ring resized. Please can you advise on the best way to do this? We live in Shropshire so need to plan travelling in to the shop etc.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-07 14:19:09',
'updated_at' => '2023-03-07 14:19:09',
),
334 => 
array (
'id' => 410,
'title' => 'Karan punni',
'email' => 'karanpnn@gmail.com',
'phone' => '07549953727',
'description' => 'Hi 
Please can I book and engagement ring consultation at your Birmingham branch this Saturday afternoon. Looking at a ring with a lab grown diamond

Thanks',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-08 00:58:32',
'updated_at' => '2023-03-08 00:58:32',
),
335 => 
array (
'id' => 411,
'title' => 'Sn',
'email' => 'sn@bt.com',
'phone' => '07892747483',
'description' => 'Test',
'custom_url' => 'https://marlows-diamonds.co.uk/product/hope-marquise-shape-diamond-shoulder-set-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-08 03:28:27',
'updated_at' => '2023-03-08 03:28:27',
),
336 => 
array (
'id' => 412,
'title' => 'Pranjal',
'email' => 'pranjal@yopmail.com',
'phone' => '1234567890',
'description' => 'Test email. Please ignore',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-08 08:01:16',
'updated_at' => '2023-03-08 08:01:16',
),
337 => 
array (
'id' => 413,
'title' => 'Dotsquares',
'email' => 'manish.gujral@dotsquares.com',
'phone' => '1234567890',
'description' => 'test',
'custom_url' => 'https://marlows-diamonds.co.uk/product/abbie-marquise-shape-solitaire-diamond-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-08 11:40:32',
'updated_at' => '2023-03-08 11:40:32',
),
338 => 
array (
'id' => 414,
'title' => 'Gajendra Testing',
'email' => 'gajendra@gmail.com',
'phone' => '98745632310',
'description' => 'testing',
'custom_url' => 'https://marlows-diamonds.co.uk/product/mens-diamond-wedding-ring-wed024',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-08 15:17:07',
'updated_at' => '2023-03-08 15:17:07',
),
339 => 
array (
'id' => 415,
'title' => 'pranjal',
'email' => 'pranjal@yopmail.com',
'phone' => '78965465465',
'description' => 'testing message. please ignore',
'custom_url' => 'https://marlows-diamonds.co.uk/live-diamond-search',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-08 15:19:00',
'updated_at' => '2023-03-08 15:19:00',
),
340 => 
array (
'id' => 416,
'title' => 'Ceri Tucker',
'email' => 'functionalfitness89@gmail.com',
'phone' => '07792706518',
'description' => 'Is your Birmingham shop open on Good Friday 7th April?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-09 20:54:16',
'updated_at' => '2023-03-09 20:54:16',
),
341 => 
array (
'id' => 417,
'title' => 'Willan Greaves',
'email' => 'greaveswillan2000@icloud.com',
'phone' => '07538759609',
'description' => 'Intown and would like to view this ring please',
'custom_url' => 'https://marlows-diamonds.co.uk/product/selena-pear-shape-claw-shoulder-set-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-10 18:41:30',
'updated_at' => '2023-03-10 18:41:30',
),
342 => 
array (
'id' => 418,
'title' => 'Humairaa Teladia',
'email' => 'humairaat@hotmail.com',
'phone' => '07921222447',
'description' => 'Hi - my engagement ring is from your store and we\'d like to come in and look at wedding rings next Saturday, around 2:30pm if that\'s okay?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-11 22:30:34',
'updated_at' => '2023-03-11 22:30:34',
),
343 => 
array (
'id' => 419,
'title' => 'Ella',
'email' => 'jonesella1980@gmail.com',
'phone' => '+447568083337',
'description' => 'Hi there,
I am enquiring about the Addison Twist Solitaire Enagagment Ring.
My preference is to have the ring in 18ct yellow gold. Can I ask is the claw setting for this ring platinum or white gold?
Also, with regards to us choosing a Lab Diamond, what certification would come with the ring?
Many thanks
Ella & Mark',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-11 23:52:24',
'updated_at' => '2023-03-11 23:52:24',
),
344 => 
array (
'id' => 420,
'title' => 'Katie O\'Leary',
'email' => 'Katie_oleary89@hotmail.co.uk',
'phone' => '07850014341',
'description' => 'Hi

We are hoping to pop in this Saturday to look at wedding bands similar to this. We will be available from around 11.30am. Please can you confirm if we can pop in?

Kind regards,
Katie',
'custom_url' => 'https://marlows-diamonds.co.uk/product/women-s-diamond-eternity-ring-et106',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-13 04:37:10',
'updated_at' => '2023-03-13 04:37:10',
),
345 => 
array (
'id' => 421,
'title' => 'DILIP NAGOTHA',
'email' => 'sales@snjdiam.com',
'phone' => '+91 83568 03620',
'description' => 'SNJ DIAM is a diamond manufacturer company of 0.10 Cts. to 5 Cts,Round,Fancy shape ,Fancy color In Certified and Parcel goods,

We have a customer all over the world and we supply a goods to measure big retailer of USA, CHINA, SINGAPORE, EUROPE,ETC



Our Company always ensures to supply the clients with their demands in highly precise and timely manner and with competitive prices',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-13 18:28:24',
'updated_at' => '2023-03-13 18:28:24',
),
346 => 
array (
'id' => 422,
'title' => 'Amy Long',
'email' => 'amy084@hotmail.co.uk',
'phone' => '+447738732136',
'description' => 'Hi there, we bought my engagement ring  from you in Jan (£4600) and I am not happy with the setting the diamond has been put in. I have a oval diamond and can set lots of the setting around the diamond (not like other oval diamond ring I have seen images of) Can i please send some pics for you to review. Thanks

Amy',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-13 20:30:17',
'updated_at' => '2023-03-13 20:30:17',
),
347 => 
array (
'id' => 423,
'title' => 'Ayesha',
'email' => 'ayeshaseo.marketing@gmail.com',
'phone' => '03059972520',
'description' => 'Hello There,
I hope you are doing well.
I am providing backlinks & Guest Blog posting services on high DA and traffic websites. I will provide you with one article 2 Do-follow links. I help my clients to boost-up their ranking on google. I will do blog posts on these all niche websites. I will do it at a very cheap rate.

Check our Guest posting sites list and pricing offers!
Guest post list = https://docs.google.com/spreadsheets/d/1EMphwvZQXCQxYTrjOMNL1zoTGgTnqNdZ/edit#gid=187428556


Can you select a package?
All posts will be permanent and Do-follow.
All posts will be indexed by google.
Writing services.
High Authority websites.
I have an article writing team. They will write articles about your keyword details. But they will charge an extra $20 for each writing article. Article will be 100% unique, Plagiarism free and related to your product details.

Let me know if you have any questions. I am here to help you.
Looking forward to working with you.
Thanks,',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-13 21:46:22',
'updated_at' => '2023-03-13 21:46:22',
),
348 => 
array (
'id' => 424,
'title' => 'Hersh Thake',
'email' => 'hershthaker@gmail.com',
'phone' => '+447716208499',
'description' => 'Could i view this tomorrow (14th March)?',
'custom_url' => 'https://marlows-diamonds.co.uk/product/cassidy-oval-shape-knife-edge-diamond-engagement-ring',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-13 23:17:13',
'updated_at' => '2023-03-13 23:17:13',
),
349 => 
array (
'id' => 425,
'title' => 'Ashley Powers',
'email' => 'ashley.powers@hotmail.co.uk',
'phone' => '+1 8178911053',
'description' => 'hi, we bought both my wife\'s engagement ring and wedding ring from Marlow\'s.  We will be visiting the UK in April and specifically Birmingham on April 8th.  We would like to have both her rings resized with you on that day. could you indicate if it\'s possible to make an appointment and possible cost?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-13 23:47:24',
'updated_at' => '2023-03-13 23:47:24',
),
350 => 
array (
'id' => 426,
'title' => 'Susan orchard',
'email' => 'tackleshack2@icloud.com',
'phone' => '07497 145855',
'description' => 'Do you buy secondhand engagement and diamond rings that were purchased from yourselves, I do have the certificate for the engagement ring, or can you advise the best place to go ?
Thank you for your time 
Susan Orchard',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-14 13:56:49',
'updated_at' => '2023-03-14 13:56:49',
),
351 => 
array (
'id' => 427,
'title' => 'Mr George Stephenson',
'email' => 'george23751@btinternet.com',
'phone' => '07810125631',
'description' => 'Hi I see you have a sale on currently. I live in Somerset and I\'ll be in Birmingham next week but unfortunately not until Weds after your winter sale ends. Is there any chance the sale might be extended?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-15 16:21:02',
'updated_at' => '2023-03-15 16:21:02',
),
352 => 
array (
'id' => 428,
'title' => 'Ryan Brown',
'email' => 'brownryan981@gmail.com',
'phone' => '5168562184',
'description' => 'Hello Sir/Madam,

Hope you\'re having a great day!

Myself Ryan, from an Internet Marketing Company.

I would like to tell you some points about your online business. I hope  you won’t mind spending only 2-3 minutes to have a look at the following lines:

It seems you\'ve been spending a budget with sponsors or PPC.

. In PPC, you may get the sales but only after paying a certain amount every time and if you stop paying, then the sales will soon.

. In SEO, You need to spend a budget months. Once keywords will be on the first page of Google, you can get satisfied traffic for a long time. 

. 90% of users like Organic results over the sponsored ones because these results are more relevant and valuable. So just imagine how many valuable customers you are losing by not focusing on organic search results.

By investing a few months in SEO, you can see drastic changes in your website internally and externally. We\'ll show you TOP Rankings in your keywords, link popularity, organic traffic, and many more...

After reviewing your website, I noticed some major on-page and off-page issues need to be fixed soon. For more information about your site errors, please respond to my email.

I would be happy to provide you Complete Site Analysis Report (free of cost) with our Company Profile, Work Experience, and Client Testimonials. 

Our main AIM is customer satisfaction. We are not like others. We\'ve limited customers and make sure they are really happy with our performance. 

You may be interested in Big Big Companies but I can say they\'re taking money only showing their company brand to customers; otherwise, the result part is Zero. The decision is yours!

We wish you the best of luck and forward to a long and healthy business relationship with you and your company.

Waiting for your positive response… 

Best Regards,
Ryan Brown
--------------------------------------
Business Development Manager
New York 11801, USA
CONFIDENTIALITY NOTICE: This email, including any attachments, is for the sole use of the intended recipient(s) and may contain confidential and privileged information. Any unauthorized review, use or distribution is prohibited. If you are not the intended recipient, please contact the sender immediately and destroy all copies of the original message. Thank you.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-15 20:02:04',
'updated_at' => '2023-03-15 20:02:04',
),
353 => 
array (
'id' => 429,
'title' => 'Dale Huey',
'email' => 'dale.huey@icloud.com',
'phone' => '07825283933',
'description' => 'I’m looking for a 1.0 or above diamond solitaire ring. Round cut, good clarity, yellow gold ring.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-18 18:57:21',
'updated_at' => '2023-03-18 18:57:21',
),
354 => 
array (
'id' => 430,
'title' => 'Levi Ward',
'email' => 'Leviward22@hotmail.co.uk',
'phone' => '07392753513',
'description' => 'Hello, I had my engagement ring from you around 4 years ago. We are getting married in 2 months and am just wondering if we need to book an appointment to discuss wedding rings or is it OK to just pop in?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-18 23:57:09',
'updated_at' => '2023-03-18 23:57:09',
),
355 => 
array (
'id' => 431,
'title' => 'Dale Huey',
'email' => 'dale.huey@icloud.com',
'phone' => '07825283933',
'description' => 'I would like to buy an engagement ring, solitaire, 1.20+ carat, D-F colour, VS1 or better, in an 18ct yellow gold ring/setting. Don’t need until August. Is there a best time to buy?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-19 00:17:39',
'updated_at' => '2023-03-19 00:17:39',
),
356 => 
array (
'id' => 432,
'title' => 'Chloe Robinson',
'email' => 'chloelouise-95@hotmail.co.uk',
'phone' => '07775678575',
'description' => 'We bought a platinum wedding ring from yourself 1-2 years ago. Does the lifetime warranty include size alteration? And the size be altered whilst we wait? Hang around?',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-19 01:23:02',
'updated_at' => '2023-03-19 01:23:02',
),
357 => 
array (
'id' => 433,
'title' => 'Arush Ray',
'email' => 'arushray.digitalmarketing@gmail.com',
'phone' => '01234567890',
'description' => 'Hi,
I am Arush Ray,

I was on your website. I am a Brand Promotion Specialist of a renowned SEO, Web Design & Development Company.  We have been offering SEO, SMO, Web Design, Web Development, PPC, Mail Marketing, Graphics Design, and complete Link Building Services for the last 5 years.

We will be happy to help to execute SEO & Web Design and Development projects at a much lower cost than what you have in-house. No compromise on quality!

We have worked for many industries-E-comm, Real estate, Loan provider, tour companies, Window tinting, bariatric surgery, Escort services and steroids also.

Some of our off page and on-page SEO techniques listed below

We are promising the following improvements for your website and business:
1. Fix all the website issues.
2. Ranking Improvement.
3. Brand Establishment.
4. Increasing Organic Search Traffic.
5. Enhancing Conversion Rate.  
6. Guest post on Authority sites at an affordable price
(We are one of the premier media publishing house offering wide range of websites for guest posts)

We would be happy to solve all this issue on behalf of you to bring the website in good SERP position.

Do let me know if you are interested then I will be happy to share our Methodologies and work details.

May we send a complete analysis report along with our other rate chat and keyword analysis report by next email?

I look forward to your mail.

Kind regards.',
'custom_url' => 'https://marlows-diamonds.co.uk/visit-us',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-20 12:44:27',
'updated_at' => '2023-03-20 12:44:27',
),
358 => 
array (
'id' => 434,
'title' => 'Kate',
'email' => 'katejoseph25@yahoo.com',
'phone' => '07956212298',
'description' => 'Would like to buy some diamonds',
'custom_url' => 'https://marlows-diamonds.co.uk/live-diamond-search?gclid=EAIaIQobChMIoKegvdHr_QIVSuztCh1gnQ41EAAYASAAEgLCmfD_BwE',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-21 04:50:48',
'updated_at' => '2023-03-21 04:50:48',
),
359 => 
array (
'id' => 435,
'title' => 'Kate',
'email' => 'katejoseph25@yahoo.com',
'phone' => '07956212298',
'description' => 'Arrange to view diamond tmrw pls',
'custom_url' => 'https://marlows-diamonds.co.uk/live-diamond-search?gclid=EAIaIQobChMIoKegvdHr_QIVSuztCh1gnQ41EAAYASAAEgLCmfD_BwE',
'is_deleted' => 0,
'deleted_at' => NULL,
'created_at' => '2023-03-21 04:53:03',
'updated_at' => '2023-03-21 04:53:03',
),
));
        
        
    }
}