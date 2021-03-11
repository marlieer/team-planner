<?php

use App\Education;
use App\Skill;
use App\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Patrick
        $teamMember = TeamMember::create([
            'name' => 'Patrick Ronning',
            'job_title' => 'Partner & Brand Strategist',
            'position' => 'Consultant',
            'bio' => "As a founding partner of Signifly, Patrick has many years of experience in strategic communication, personnel management, and the creation of a large network and collaboration with a wide range of partners and customers, public as well as private. Through Signifly, Patrick has run projects of all sizes - from the idea phase to a successful execution and implementation.\nPatrick holds a bachelor’s degree in Business Administration & Organisational Communication and a master’s degree in Business administration & Organisational Communication from Copenhagen Business School.\nPatrick has previously provided communication advice for, among others, TDC, the Road Directorate, the Capital Region of Denmark, Google, the City of Copenhagen, the Prison and Probation Service and the Pharmaceutical Industry Association. As partner, Patrick also makes important, strategic decisions at all levels of the company, including contracts, customer relationships, and resource allocation.",
            'years_with_signifly' => 10,
            'phone' => '+45 4031 2498',
            'email' => 'plr@signifly.com',
            'profile_image' => '/images/profiles/patrick_ronning.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Business Administration & Organisational Communication',
                'school' => 'Copenhagen Business School'
            ]),
            new Education([
                'type' => 'Masters',
                'subject' => 'Business Administration & Organisational Communication',
                'school' => 'Copenhagen Business School'
            ])
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'strategic communication',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'personnel management',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'project management',
                'category' => 'Consultant',
            ]),

        ]);

        $teamMember->push();


        // Mads
        $teamMember = TeamMember::create([
            'name' => 'Mads Kjaergaard',
            'job_title' => 'Consultant',
            'position' => 'Consultant',
            'bio' => "Mads joined Signifly in early 2016. Bringing strong business understanding and strategic thinking to the table, his strengths lie in helping clients improve their business with digital technology.\nMads holds a PBA in International Sales and Marketing Management.\nMads was recently responsible for the launch of the new e-commerce platform for Mads Nørgaard, and his most prominent projects at Signifly include work for Novo Nordisk, Leo Pharma, and Innovation Center Denmark.\nWhen not at his desk, Mads is probably cross-fit training at the gym.",
            'years_with_signifly' => 5,
            'phone' => '+45 2785 1529',
            'email' => 'mk@signifly.com',
            'profile_image' => '/images/profiles/mads_kjaergaard.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'International Sales & Marketing Management',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'strategic communication',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'marketing',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'sales',
                'category' => 'Consultant',
            ]),

        ]);

        $teamMember->push();


        // Nicklas
        $teamMember = TeamMember::create([
            'name' => 'Nicklas Ronning',
            'job_title' => 'Managing Director, Canada',
            'position' => 'Consultant',
            'bio' => "Nicklas is responsible for our continuous expansion to new markets, currently working to develop the North American market by building a capable digital innovation team in Montreal. Nicklas has been pivotal in the opening of our office in Montreal, where he's also Managing Director. Besides running our office Canada office, Nicklas assists our clients and partners in Digital Transformation as well as Marketing and Sales strategies - both areas of expertise he honed from his previous position as Sales Manager at IT Minds.\nNicklas holds a master’s degree in Management of Innovation and Business Development from Copenhagen Business School.",
            'years_with_signifly' => 6,
            'phone' => '+(438) 866-1336',
            'email' => 'nr@signifly.com',
            'profile_image' => '/images/profiles/nicklas_ronning.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelors',
                'subject' => 'Innovation and Business Development',
                'school' => 'Copenhagen Business School'
            ]),
            new Education([
                'type' => 'Masters',
                'subject' => 'Innovation and Business Development',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'strategic communication',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'marketing',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'sales',
                'category' => 'Consultant',
            ]),

        ]);

        $teamMember->push();

        // John
        $teamMember = TeamMember::create([
            'name' => 'John Mongeau',
            'job_title' => 'Head of Strategic Accounts, Canada',
            'position' => 'Consultant',
            'bio' => "John has over 10 years of sales and relationship building experience.\nHe started off his professional career as a lawyer, but quickly moved to the business world.\nJohn is playing a key role in growing Signifly’s presence in North America as Head of Strategic Accounts. And with deep experience working at a digital agency and building meaningful business relationships for growing startups in Canada, the US and Europe, John loves inspiring people to think differently about all things digital.\nJohn is an active member of the Québec Bar, holds a Bachelor of Laws (LL.B.) as well as a Bachelor of Arts, with a major in History (Honours).\nIf he’s not giving a presentation, you can find him jamming out to future house, doing downward dog, or playing with his daughter, Logan—sometimes doing all three at once.",
            'years_with_signifly' => 5,
            'phone' => '514-984-7325',
            'email' => 'jm@signifly.com',
            'profile_image' => '/images/profiles/john_mongeau.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Law',
                'school' => 'University of Quebec'
            ]),
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Arts',
                'school' => 'University of Quebec'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'strategic communication',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'law',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'sales',
                'category' => 'Consultant',
            ]),

        ]);

        $teamMember->push();


        // Tobias
        $teamMember = TeamMember::create([
            'name' => 'Tobias Lindhardt',
            'job_title' => 'Junior Consultant',
            'position' => 'Consultant',
            'bio' => "Tobias started his Signifly journey during the beginning of March 2020 as a junior consultant and has already been able to develop new relations and create creative solutions together with our clients.\nTobias has loads of experience within the startup environment and even founded his very own before joining Signifly. With his knowledge of starting up businesses from scratch, Tobias has a strong foundation and intuition to see great business potential, which he’s able to use to create innovative and ambitious solutions for our clients.\nFUN FACT: Tobias enjoys exploring the world and has a dream of finishing the Camino in the near future.",
            'years_with_signifly' => 1,
            'phone' => '+45 53 66 94 44',
            'email' => 'tl@signifly.com',
            'profile_image' => '/images/profiles/tobias_lindhardt.jpg'
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'strategic communication',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'startups',
                'category' => 'Consultant',
            ]),
        ]);

        $teamMember->push();


        // Hans
        $teamMember = TeamMember::create([
            'name' => 'Hans Theisen',
            'job_title' => 'Senior Digital Business Consultant',
            'position' => 'Consultant',
            'bio' => "Hans joined Signifly in March 2021 and brings 20+ years of Sales and Marketing experience. He thrives at the intersection of creativity, tech, design, and business – making him a natural fit for the Signifly approach and a huge asset to our ambitious clientele.\nBefore joining us, Hans worked as a consultant for 15 years, and today, he helps Signifly attract exciting business partnerships and scope innovative business solutions. His passion is driven by real impact and anchored in people, whether that means driving behavioral change in consumers or making tech more accessible.\nOutside the office, Hans keeps busy mountain biking, cheering on Liverpool FC, running, and riding his motorcycle on sunny days.",
            'years_with_signifly' => 0,
            'email' => 'ht@signifly.com',
            'profile_image' => '/images/profiles/no_photo.jfif'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Business',
                'school' => 'University of British Columbia'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'strategic communication',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'marketing',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'sales',
                'category' => 'Consultant',
            ]),

        ]);

        $teamMember->push();


        // Charlie
        $teamMember = TeamMember::create([
            'name' => 'Charlie Cross',
            'job_title' => 'Junior Consultant',
            'position' => 'Consultant',
            'bio' => "Charlie joined the Canadian team in 2020 as a junior consultant. After previously working in communications, Charlie is now helping us find new opportunities for Signifly. Charlie is one of our high potential personnel here at Signifly and has already demonstrated his ability for forward thinking and problem solving in many of the projects.\nWhen he is not hard at work for us, Charlie is earning a degree in economics at McGill University or pursuing his passion for photography.",
            'years_with_signifly' => 1,
            'email' => 'cc@signifly.com',
            'profile_image' => '/images/profiles/no_photo.jfif'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Economics',
                'school' => 'McGill University'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'strategic communication',
                'category' => 'Consultant',
            ]),
        ]);

        $teamMember->push();


        // Hedvig
        $teamMember = TeamMember::create([
            'name' => 'Hedvig Aanesen',
            'job_title' => 'Innovation Team Lead',
            'position' => 'Innovation Lead',
            'bio' => "Hedvig joined Signifly in April 2019 and now heads up the Innovation Team as our Innovation Team Lead. She is our Norwegian queen, currently working as a strategic partner, project manager, and consultant for our Norwegian clients. She came to Signifly with a highly developed skill set and vast experience, having previously worked with Siemens Denmark/Norway in strategic communications.\nIn addition to that, Hedvig holds a BSc in Marketing Management, which provides her with expertise within branding, project management, and content development. Today, she pairs this education and work experience to create strong business value for our clients, as well as help our other Signifly Innovation Leads drive strong digital projects.\nHedvig is the strategic mastermind behind the repositioning projects for YX Norge, 7-Eleven as well as the new e-commerce platform for Maersk Container Sales.",
            'years_with_signifly' => 2,
            'phone' => '+45 2478 8291',
            'email' => 'ha@signifly.com',
            'profile_image' => '/images/profiles/hedvig_aanesen.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Marketing Management',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'strategic communication',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'project manager',
                'category' => 'Innovation',
            ]),
            new Skill([
                'name' => 'repositioning',
                'category' => 'Innovation',
            ]),

        ]);

        $teamMember->push();


        // Sara
        $teamMember = TeamMember::create([
            'name' => 'Sara Friis Bache',
            'job_title' => 'Innovation Lead & Head of Operations',
            'position' => 'Innovation Lead',
            'bio' => "Sara started her Signifly journey at the beginning of 2019 and made an immediate impact with her vast and extensive experience within IT project management and management consulting. She is a true planning warrior, scheduling the project processes in close collaboration with our clients, and she is known for her ability to enforce the internal timelines with a firm hand and a big smile.\nSara holds a BSc in International Business & an MSc in Economics and Business Administration from Copenhagen Business School and is thus fully equipped to provide clients and colleagues with creative and strategic sparring.\nSara is the planning wizard behind the innovative LUXWI brand webshop and the Nautix digital product design as well as several other excellently executed client cases.\nFUN FACT: Sara is a semi-pro cello player!",
            'years_with_signifly' => 2,
            'phone' => '+45 4093 8119',
            'email' => 'sb@signifly.com',
            'profile_image' => '/images/profiles/sara_friis_bache.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'International Business',
                'school' => 'Copenhagen Business School'
            ]),
            new Education([
                'type' => 'Masters',
                'subject' => 'Economics',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'project manager',
                'category' => 'Innovation',
            ]),
            new Skill([
                'name' => 'planning',
                'category' => 'Innovation',
            ]),

        ]);

        $teamMember->push();


        // Katherine
        $teamMember = TeamMember::create([
            'name' => 'Katherine Elvira Boysen',
            'job_title' => 'Innovation Lead',
            'position' => 'Innovation Lead',
            'bio' => "With over 9 years of experience in communications and marketing, Katherine has joined the Canadian Signifly team in 2019 as an Innovation Lead. She is passionate about how brands can innovate their digital presence through storytelling and emotion-based narratives.\nKathrine holds a master’s degree in Strategic Communications from the University of Copenhagen, which she uses as the foundation for her excellent brand storytelling and UX writing skills.",
            'years_with_signifly' => 2,
            'email' => 'keb@signifly.com',
            'profile_image' => '/images/profiles/kathrine_elvira_boysen.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Strategic Communications',
                'school' => 'Copenhagen Business School'
            ]),
            new Education([
                'type' => 'Masters',
                'subject' => 'Strategic Communications',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'strategic communication',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'marketing',
                'category' => 'Consultant',
            ]),
            new Skill([
                'name' => 'storytelling',
                'category' => 'Innovation',
            ]),
            new Skill([
                'name' => 'UX',
                'category' => 'Designer',
            ]),

        ]);

        $teamMember->push();


        // Tobias
        $teamMember = TeamMember::create([
            'name' => 'Tobias Jorgensen',
            'job_title' => 'Innovation Lead',
            'position' => 'Innovation Lead',
            'bio' => "Tobias started as an innovation lead at Signifly in 2020, bringing with him an ability to structure processes to transform dreams into reality.\nBefore coming to Signifly Tobias worked at KMD A/S as an assistant delivery manager for the enterprise, adding valuable experience to his degree in Business Administration and Project Management.\nIn many ways, Tobias is the ‘Daniel Kahnemann’ of Signifly with his vast knowledge within the world of decision-making and his ability to understand how to manage and overcome risk and uncertainty in order to make the right business decisions for our clients.\nFUN FACT: Tobias took a Mandarin course while he was living in Shanghai for a whole semester. Please put him to the test – nobody at the office is able to verify if he actually speaks it correctly.",
            'years_with_signifly' => 1,
            'phone' => '+45 2478 8291',
            'email' => 'tj@signifly.com',
            'profile_image' => '/images/profiles/tobias_jorgensen.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Business Administration & Project Management',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'risk management',
                'category' => 'Innovation',
            ]),

        ]);

        $teamMember->push();


        // Mathilde
        $teamMember = TeamMember::create([
            'name' => 'Mathilde Ive',
            'job_title' => 'Innovation Lead',
            'position' => 'Innovation Lead',
            'bio' => "Bringing with her experience from over 11 years in the media and lifestyle industry, Mathilde joined Signifly in October 2020 to help clients achieve ambitious goals and unleash their full digital potential. Her extensive education and experiences in digital project management, community management, and journalism have helped her develop a well-rounded portfolio, and she excels in projects dealing with product development, content strategy, and digital development.\nFurthermore, her dedicated, active approach to work doesn't just stay in the office. Mathilde also loves to keep active by running, sailing, and skiing - and she even founded one of Copenhagen's largest running communities, adidas runners Copenhagen.",
            'years_with_signifly' => 1,
            'email' => 'mi@signifly.com',
            'profile_image' => '/images/profiles/no_photo.jfif'
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'journalism',
                'category' => 'Innovation',
            ]),
            new Skill([
                'name' => 'project manager',
                'category' => 'Innovation',
            ]),
            new Skill([
                'name' => 'community manager',
                'category' => 'Innovation',
            ]),

        ]);

        $teamMember->push();


        // Viktoria
        $teamMember = TeamMember::create([
            'name' => 'Viktoria Juel',
            'job_title' => 'Junior Consultant',
            'position' => 'Innovation Lead',
            'bio' => "Viktoria joined Signifly in November 2020 to help our Norwegian clients unleash their full digital potential. Her eye for detail, experience in digital marketing and project management, and enthusiasm for digital innovation allow her to translate unique business opportunities into well-executed plans. Simply supply coffee and let her elevate your brand.\nToday, she helps serve our clients through concepting engaging content, planning campaigns, and overseeing various aspects in the project pipeline while she completes her graduate studies in Business Administration and E-business at CBS.\nWhen she's not behind her desk, you might find Viktoria binging the newest Netflix cooking show - but you won't find her hitting the slopes anytime soon. Despite hailing from Norway, Viktoria tends to shy away from the winter sports, kicking the old stereotype to the side in favor of something a bit sunnier.",
            'years_with_signifly' => 0,
            'email' => 'vj@signifly.com',
            'profile_image' => '/images/profiles/no_photo.jfif'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Business Administration',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            new Skill([
                'name' => 'digital marketing',
                'category' => 'Innovation',
            ]),
            new Skill([
                'name' => 'project manager',
                'category' => 'Innovation',
            ]),
            new Skill([
                'name' => 'planning',
                'category' => 'Innovation',
            ]),

        ]);

        $teamMember->push();
    }
}
