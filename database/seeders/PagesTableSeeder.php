<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->delete();

        DB::table('pages')->insert([
            [
                'title' => 'Meetup #7 Lisboa',
                'slug' => 'meetup-7-lisboa',
                'layout' => 'meetup',
                'blocks' => '[{"data": {"date": "2023-03-28", "Event": "Meetup #7 Lisbon", "title": "Meetup #7", "footer": "Talks, food, and drinks are free, thanks to our friends at devoteam. ❤️", "Sponsor": "Devoteam", "content": "PHP Portugal is a community around PHP and Web Technologies, from Portugal 🇵🇹. And today, we\'re happy to invite you to our PHP Portugal #7 meetup, hosted by our friends at devoteam!", "location": "Lisbon", "schedule": "* **18:30** - Doors open\\n* **19:00** - Introduction and announcements\\n* **19:15** - Talk 1: \\"bard make:presentation\\" by David Adão\\n* **19:35** - 5 minutes break\\n* **19:40** - Talk 2: \\"Three strategies to split your monolith into services\\" by José Postiga\\n* **20:00** - Snacks, Beer, Pizza, socialization", "EventLink": "https://www.eventbrite.pt/e/php-portugal-7-at-devoteam-tickets-570946405067", "SponsorLink": "https://devoteam.com", "locationLink": "https://www.google.com/maps/place/Av.+Dom+Jo%C3%A3o+II+43+9%C2%BA+floor,+1990-084+Lisboa,+Portugal/@38.771797,-9.1002252,17z/data=!3m1!4b1!4m5!3m4!1s0xd193181240a758d:0xeb6b7d28d387838!8m2!3d38.7717928!4d-9.0980365?hl=en-US", "featured_image": 1}, "type": "meetup-body"}]',
                'parent_id' => null,
                'created_at' => '2023-03-17 19:20:07',
                'updated_at' => '2023-03-17 19:25:40',
            ],

            [
                'title' => 'Meetup #5 Lisboa',
                'slug' => 'meetup-5-lisboa',
                'layout' => 'meetup',
                'blocks' => '[{"data": {"date": "2023-03-28", "Event": "Meetup #7 Lisbon", "title": "Meetup #7", "footer": "Talks, food, and drinks are free, thanks to our friends at devoteam. ❤️", "Sponsor": "Devoteam", "content": "PHP Portugal is a community around PHP and Web Technologies, from Portugal 🇵🇹. And today, we\'re happy to invite you to our PHP Portugal #7 meetup, hosted by our friends at devoteam!", "location": "Lisbon", "schedule": "* **18:30** - Doors open\\n* **19:00** - Introduction and announcements\\n* **19:15** - Talk 1: \\"bard make:presentation\\" by David Adão\\n* **19:35** - 5 minutes break\\n* **19:40** - Talk 2: \\"Three strategies to split your monolith into services\\" by José Postiga\\n* **20:00** - Snacks, Beer, Pizza, socialization", "EventLink": "https://www.eventbrite.pt/e/php-portugal-7-at-devoteam-tickets-570946405067", "SponsorLink": "https://devoteam.com", "locationLink": "https://www.google.com/maps/place/Av.+Dom+Jo%C3%A3o+II+43+9%C2%BA+floor,+1990-084+Lisboa,+Portugal/@38.771797,-9.1002252,17z/data=!3m1!4b1!4m5!3m4!1s0xd193181240a758d:0xeb6b7d28d387838!8m2!3d38.7717928!4d-9.0980365?hl=en-US", "featured_image": 1}, "type": "meetup-body"}]',
                'parent_id' => null,
                'created_at' => '2023-03-17 19:20:07',
                'updated_at' => '2023-03-17 19:25:40',
            ],
        ]);
    }
}
