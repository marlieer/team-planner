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
            Skill::firstWhere('name', 'project management'),
            Skill::firstWhere('name', 'strategic communication'),
            Skill::firstWhere('name', 'personnel management'),
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
            Skill::firstWhere('name', 'marketing'),
            Skill::firstWhere('name', 'strategic communication'),
            Skill::firstWhere('name', 'sales'),
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
            Skill::firstWhere('name', 'marketing'),
            Skill::firstWhere('name', 'strategic communication'),
            Skill::firstWhere('name', 'sales'),
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
            Skill::firstWhere('name', 'law'),
            Skill::firstWhere('name', 'strategic communication'),
            Skill::firstWhere('name', 'sales'),
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
            Skill::firstWhere('name', 'strategic communication'),
            Skill::firstWhere('name', 'startups'),
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
            Skill::firstWhere('name', 'marketing'),
            Skill::firstWhere('name', 'strategic communication'),
            Skill::firstWhere('name', 'sales'),
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
            Skill::firstWhere('name', 'strategic communication')
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
            Skill::firstWhere('name', 'repositioning'),
            Skill::firstWhere('name', 'strategic communication'),
            Skill::firstWhere('name', 'project management'),
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
            Skill::firstWhere('name', 'project management'),
            Skill::firstWhere('name', 'planning'),
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
            Skill::firstWhere('name', 'strategic communication'),
            Skill::firstWhere('name', 'marketing'),
            Skill::firstWhere('name', 'digital design'),
            Skill::firstWhere('name', 'storytelling'),
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
            Skill::firstWhere('name', 'risk management'),
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

            Skill::firstWhere('name', 'journalism'),
            Skill::firstWhere('name', 'project management'),
            Skill::firstWhere('name', 'personnel management'),
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
            Skill::firstWhere('name', 'digital marketing'),
            Skill::firstWhere('name', 'project management'),
            Skill::firstWhere('name', 'planning'),
        ]);

        $teamMember->push();


        // malthe
        $teamMember = TeamMember::create([
            'name' => 'Malthe Mogensen',
            'job_title' => 'Director of Strategy',
            'position' => 'Strategist',
            'bio' => "Malthe joined the team in early 2018. Malthe is a creative strategist who believes in the efficiency of creativity and resents the idea of choosing one or the other. As Director of Strategy, he is responsible for the manifestation of our mindset and method ‘innovate by doing’ – an entrepreneurial approach to digital strategy.\nMalthe holds a bachelor's in Business Communication & Economics and a master's in Political Communication & Management from Copenhagen Business School.\nSince his arrival, he has been the mind behind projects such as #Proudtobesiemens, STUcK in Sønderjylland, the transformation of Kriminalforsorgen, and a number of signal mining experiments.",
            'years_with_signifly' => 3,
            'phone' => '+45 5090 3474',
            'email' => 'mm@signifly.com',
            'profile_image' => '/images/profiles/malthe_mogensen.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Business Communication & Economics',
                'school' => 'Copenhagen Business School'
            ]),
            new Education([
                'type' => 'Masters',
                'subject' => 'Political Communication & Management',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'creative strategist'),
            Skill::firstWhere('name', 'project management'),
        ]);

        $teamMember->push();


        // Michael
        $teamMember = TeamMember::create([
            'name' => 'Michael Valentin',
            'job_title' => 'CEO, Partner & Digital Strategist',
            'position' => 'Strategist',
            'bio' => "Michael is a digital strategist with a heavy technical profile. For the past 10 years, he has worked with digital strategy, design, and development of everything from digital products, websites, e-commerce, and self-service solutions. He has a deep expertise in specification and architecture for larger digital systems, utilizing his deep insight into both business strategy, organization, and digital design to devise and execute solutions that deliver results, achieve support, and gain traction from both internal and external stakeholders.\nMichael holds a degree in Software Development from the IT-University of Copenhagen.\nHe was one of the key people behind projects like Maersk Line Container Sales, HelloSkin, and Rema1000.",
            'years_with_signifly' => 10,
            'phone' => '+45 2819 2966',
            'email' => 'mv@signifly.com',
            'profile_image' => '/images/profiles/michael_valentin.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Software Development',
                'school' => 'IT-University Copenhagen'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'digital strategist'),
            Skill::firstWhere('name', 'digital design'),
            Skill::firstWhere('name', 'digital development'),
        ]);

        $teamMember->push();

        // Mads
        $teamMember = TeamMember::create([
            'name' => 'Mads Lindum',
            'job_title' => 'Marketing & Branding Strategist',
            'position' => 'Strategist',
            'bio' => "Mads joined Signifly at the brink of 2019. Mads is a content & communications strategist and a specialist in digital brand communication. In order to create strategic and creative brand communication, he closely follows the current trends and developments in order to create the most innovative, effective, and creative solutions for our clients.\nMads holds a master’s in Brand & Communications Management from Copenhagen Business School.\nMads is a creative marketing & content strategist and a real data warrior that loves optimization and performance.",
            'years_with_signifly' => 2,
            'phone' => '+45 2818 5397',
            'email' => 'ml@signifly.com',
            'profile_image' => '/images/profiles/mads_lindum.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Brand & Communications Management',
                'school' => 'Copenhagen Business School'
            ]),
            new Education([
                'type' => 'Masters',
                'subject' => 'Brand & Communications Management',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'content strategist'),
            Skill::firstWhere('name', 'strategic communication'),
            Skill::firstWhere('name', 'branding')
        ]);

        $teamMember->push();


        // mathilde
        $teamMember = TeamMember::create([
            'name' => 'Mathilde Lundgreen',
            'job_title' => 'Marketing Strategist',
            'position' => 'Strategist',
            'bio' => "Mathilde became an official Signifly’er in February 2020. She has a strategic and creative mind and is always looking for new and innovative ways of using digital products and marketing.\nMathilde holds a bachelor’s degree in Business Management and Marketing and a master’s in business administration and E-business at CBS. Coming from Miinto, she has vast communication and marketing knowledge within e-commerce and the fashion industry,y as well as a strong background in branding and content.\nBasically, Mathilde kicks ass at everything she does – except when in the kitchen – where countless of fires and meltdowns has occurred. Luckily, her marketing skills are always on fire.",
            'years_with_signifly' => 1,
            'phone' => '+45 81 92 89 73',
            'email' => 'mlu@signifly.com',
            'profile_image' => '/images/profiles/mathilde_lundgreen.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Business Management & Marketing',
                'school' => 'Copenhagen Business School'
            ]),
            new Education([
                'type' => 'Masters',
                'subject' => 'Business Administration & E-business',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'content strategist'),
            Skill::firstWhere('name', 'marketing'),
            Skill::firstWhere('name', 'branding')
        ]);

        $teamMember->push();


        // Ziad
        $teamMember = TeamMember::create([
            'name' => 'Ziad Soliman',
            'job_title' => 'Digital Strategist',
            'position' => 'Strategist',
            'bio' => "Ziad joined the Canadian team in 2020 as a Digital Strategist. After previously working in B2B Digital Marketing, Ziad is now working with us on our Canadian marketing efforts as well as with assisting on client project planning and execution. When Ziad is not busy generating leads and awareness for Signifly, he is an avid reader and football fan.\nZiad holds a Postgraduate degree in Digital Marketing Management from the University of Toronto and a Bachelor of Marketing and International Business from Concordia University.",
            'years_with_signifly' => 1,
            'email' => 'zs@signifly.com',
            'profile_image' => '/images/profiles/ziad_soliman.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Marketing & International Business',
                'school' => 'Concordia University'
            ]),
            new Education([
                'type' => 'Masters',
                'subject' => 'Digital Marketing Management',
                'school' => 'University of Toronto'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'digital marketing'),
            Skill::firstWhere('name', 'client communication'),
        ]);

        $teamMember->push();


        // Thor
        $teamMember = TeamMember::create([
            'name' => 'Thor Tophoj',
            'job_title' => 'Growth Consultant',
            'position' => 'Strategist',
            'bio' => "n February 2021, Thor Tophøj joined Signifly’s Copenhagen office as a Growth Consultant. He stands firmly at the intersection between product, sales, and marketing by leveraging experimentation, automation, and customer feedback to pinpoint use cases and customer segments. Before Signifly, Thor earned his stripes navigating the startup world as a Product Marketing Manager and Commercial Lead – and his passion for tech startups continues to be a source of inspiration.\nToday, he helps Signifly’s clientele leap-frog growth experiments, driving automations that result in commercial traction. His education (MSc) in Business and Communication from Copenhagen Business School and service as a naval sergeant give Thor a strong foundation of ambition and discipline, and this creative go-getter is constantly researching and developing better solutions that inspire impact.\nWhen Thor’s not at work, he’s likely chasing his son and daughter around the house, binge-watching American thriller series, playing traditional board games with friends (yes, the analog ones), figuring out how to make a good veggie burger, or running a few miles around Copenhagen’s many parks.",
            'years_with_signifly' => 0,
            'email' => 'tt@signifly.com',
            'profile_image' => '/images/profiles/no_photo.jfif'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Business & Communication',
                'school' => 'Copenhagen Business School'
            ]),
            new Education([
                'type' => 'Masters',
                'subject' => 'Business & Communication',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'startups'),
            Skill::firstWhere('name', 'sales'),
            Skill::firstWhere('name', 'marketing'),
        ]);

        $teamMember->push();


        // Gabrielle
        $teamMember = TeamMember::create([
            'name' => 'Gabrielle Olivas',
            'job_title' => 'Junior Content Strategist',
            'position' => 'Strategist',
            'bio' => "Gabrielle joined Signifly in October 2020 and today finds creative ways to deliver content as a Junior Content Strategist. She combines her passion for communication, hate for typos, and deep love of creative storytelling to create engaging, thoughtful copy for a variety of digital forms. Gabrielle leads with the belief that copy that connects combines deep consumer insights with nuanced, cultural understandings.\nOriginally coming from the entertainment and music industry, Gabrielle holds a master's in Management of Creative Business Processes from Copenhagen Business School and today helps enrich both Signifly and our clients through the written word.\nOutside the office, she still likes to flex her creative chops, and you can often find her strumming a guitar or singing like nobody's listening.",
            'years_with_signifly' => 1,
            'email' => 'go@signifly.com',
            'profile_image' => '/images/profiles/no_photo.jfif'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Creative Business Processes',
                'school' => 'Copenhagen Business School'
            ]),
            new Education([
                'type' => 'Masters',
                'subject' => 'Creative Business Processes',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'journalism'),
            Skill::firstWhere('name', 'storytelling'),
        ]);

        $teamMember->push();


        // Christian
        $teamMember = TeamMember::create([
            'name' => 'Christian Pind',
            'job_title' => 'Junior Consultant',
            'position' => 'Strategist',
            'bio' => "Christian joined Signifly in February 2021 as a Junior Consultant in our Copenhagen office. Christian’s experience in entrepreneurship, finance, and technology well out-rank most of his peers, and his ambitions have taken him around the globe – including a stint in London, where he worked at a Venture Capital. Before Signifly, Christian also took a go at entrepreneurship, founding and then selling an accounting business, and his enthusiasm for finance continues to be a source of inspiration for his approach to optimization and the customer experience.\nToday, he still hasn’t slowed his pace. Alongside earning a BSc in International Business from CBS, Christian helps Signifly create strategic proposals, develop concrete communication products, and execute exciting, ambitious digital solutions. His experiences have given him a solid foundation in innovation and strategy, which he uses to enrich our ambitious, global clientele.\nWhen he’s not in the office, Christian is also an avid traveler with a strong curiosity for learning new languages. While he already has Danish, English, and Spanish checked off – he’s looking to add a new language to his repertoire.",
            'years_with_signifly' => 0,
            'email' => 'cp@signifly.com',
            'profile_image' => '/images/profiles/no_photo.jfif'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'International Business',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'strategic communication'),
            Skill::firstWhere('name', 'digital development'),
        ]);

        $teamMember->push();


        // Alexander
        $teamMember = TeamMember::create([
            'name' => 'Alexander Spliid',
            'job_title' => 'Partner & Head of Design',
            'position' => 'Design',
            'bio' => "Alexander is a partner at Signifly and the visual cornerstone in our trio of founders. Being the Head of Design, Alexander is a versatile as they come. He has the ability to always think of the big picture when it comes to design, brand, and business. This enables him to constantly push the limits of how visual communication can influence behavior and build strong and honest brands.\nInitially self-taught, Alexander later leveled up with a bachelor’s degree in Visual Communication from DMJX. However, he started his design career way before that, freelancing at the early age of 16. Taking on every project he could get his hands on and slowly making a name for himself in the industry, before he, Michael, and Patrick started Signifly.\nYou can find Alexanders fingerprints on every single project, but notably the work done on the Visual Identity for Viking, Universe Trofæjagt, and the national rebranding of YX.",
            'years_with_signifly' => 10,
            'phone' => '+45 2276 5174',
            'email' => 'as@signifly.com',
            'profile_image' => '/images/profiles/alexander_spliid.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Visual Communication',
                'school' => 'DMJX'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'digital design'),
            Skill::firstWhere('name', 'branding'),
        ]);

        $teamMember->push();


        // soren
        $teamMember = TeamMember::create([
            'name' => 'Soren Shroder',
            'job_title' => 'Design Team Lead',
            'position' => 'Design',
            'bio' => "Søren brought his 10+ years of agency experience to Signifly back in 2015. As a UX'er he seeks to solve complex issues through intuitive design and a deep understanding of and empathy for human behaviour.\nBefore starting at Signifly, Søren worked for various agencies. As well as being a designer, he has also held positions as a front-end developer and team lead in some of Denmark’s foremost agencies.\nOriginally holding a degree in multimedia design, he has added to his skillset in the agency world by working with real clients and projects, honing his craft along the way.\nSøren was lead designer on such prominent projects as Maersk Line, DR, Rema1000 and the Danish Road Directorate and coined the phrase 'Fizz'.",
            'years_with_signifly' => 6,
            'phone' => '+45 3170 0428',
            'email' => 'ss@signifly.com',
            'profile_image' => '/images/profiles/soren_schroder.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Multimedia Design',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'digital design'),
            Skill::firstWhere('name', 'multimedia design'),
            Skill::firstWhere('name', 'front-end development'),
        ]);

        $teamMember->push();


        // Trine
        $teamMember = TeamMember::create([
            'name' => 'Trine Ronsholdt',
            'job_title' => 'Interactive Designer',
            'position' => 'Design',
            'bio' => "Trine joined Signifly back in the late summer of 2015, starting out as an intern. A conceptual thinker and visual at heart, Trine thrives on creating coherent and straightforward communication – taking a complex message and delivering it through animation, design, and crystal-clear communication – always in the language, medium, and format that the audience understands.\nHolding a degree in multimedia design and a BA in Interactive Design, Trine blurs the lines of what a designer can do. Although animation is her strong suit, this hybrid creator also dabbles in heavy UX design, screenwriting and movie production, and print.\nTrine produced the concept and animation for a Recycling Pharma video for Leo Innovation Lab and Novo Nordisk and s design webshop and B2B platform for Stila.",
            'years_with_signifly' => 6,
            'phone' => '+45 2985 0740',
            'email' => 'tr@signifly.com',
            'profile_image' => '/images/profiles/trine_ronsholdt.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Multimedia Design',
                'school' => 'Copenhagen Business School'
            ]),
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Interactive Design',
                'school' => 'Copenhagen Business School'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'multimedia design'),
            Skill::firstWhere('name', 'digital design'),
        ]);

        $teamMember->push();


        // Martin
        $teamMember = TeamMember::create([
            'name' => 'Martin Balle',
            'job_title' => 'Digital Designer',
            'position' => 'Design',
            'bio' => "Martin joined Signifly in 2017 and has been practicing his design magic ever since. He has a strong skillset within UI/UX design and excels at designing websites, apps, and user interfaces.\nBefore starting at Signifly, Martin had a multi-year stint as a freelancer and worked with various Danish start-ups.\nAs a self-taught designer, he holds no fancy degrees or diplomas, but make no mistake: his eye for detail and tech savvy are on point!\nMartin’s projects include the Maersk Container Sales platform, a startup editorial in Silicon Valley for the Foreign Ministry of Denmark, the new BII, and the upcoming release of the new 7-Eleven in Norway.",
            'years_with_signifly' => 4,
            'phone' => '+45 2893 7372',
            'email' => 'mba@signifly.com',
            'profile_image' => '/images/profiles/martin_balle.jpg'
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'digital design'),
            Skill::firstWhere('name', 'startups'),
        ]);

        $teamMember->push();


        // Alexandre
        $teamMember = TeamMember::create([
            'name' => 'Alexandre Lee',
            'job_title' => 'Design Team Lead, Canada',
            'position' => 'Design',
            'bio' => "Alexandre joined Signifly in 2019 as a Digital Designer in our Montreal office. Before Signifly, he studied graphic design and even owned his own design agency.\nAlexandre is especially skilled in User Experience (UX), User Interface (UI), Logo Design, Branding & Identity, Corporate Design, and Entrepreneurship, as well as in Business Development. Today, these expertises allow him to deliver exceptional digital work for a wide range of projects.",
            'years_with_signifly' => 2,
            'email' => 'al@signifly.com',
            'profile_image' => '/images/profiles/alexandre_lee.jpg'
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'digital design'),
            Skill::firstWhere('name', 'branding'),
            Skill::firstWhere('name', 'digital marketing'),
        ]);

        $teamMember->push();


        // Kristoffer
        $teamMember = TeamMember::create([
            'name' => 'Kristoffer Balzer Nielsen',
            'job_title' => 'Digital Designer',
            'position' => 'Design',
            'bio' => "Kristoffer joined the Signifly office in October 2019 as an UI/UX digital designer and immediately impressed us with his design magic.\nKristoffer currently holds a degree in Multimedia Design from KEA and has vast knowledge within interactive design. Despite his young age, he also carries serious experience in practicing the dark arts of UX/UI, digital design, motion graphics, and content creation.\nKristoffer is a true pixel pusher and has multiple tricks up his sleeve. Get ready to be impressed.",
            'years_with_signifly' => 2,
            'phone' => '+45 2685 5233',
            'email' => 'kbn@signifly.com',
            'profile_image' => '/images/profiles/kristoffer_balzer_nielsen.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Multimedia Design',
                'school' => 'KEA'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'digital design'),
            Skill::firstWhere('name', 'multimedia design'),
        ]);

        $teamMember->push();


        // Sasha
        $teamMember = TeamMember::create([
            'name' => 'Sasha Ng',
            'job_title' => 'Digital Designer',
            'position' => 'Design',
            'bio' => "Sasha joined the Canadian team in March 2020 as an UI/UX design intern. After working in several digital agencies in her hometown Hong Kong for 5 years, she came to Montreal hoping to gain meaningful new experiences for her personal and professional development.\nShe is keen on creating engaging browsing experiences with the use of playful and meaningful modern-day interactivity, as well as solving problems with a creative and human-centred approach. With her extensive knowledge in front-end development, she has been helping out between the design and tech teams on various projects.\nA day-time designer and a night-time geek, Sasha has a strong interest in generative art and is a big fan of cinema, music, and languages.",
            'years_with_signifly' => 1,
            'email' => 'sng@signifly.com',
            'profile_image' => '/images/profiles/sasha_ng.jpg'
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'digital design'),
            Skill::firstWhere('name', 'front-end development'),
        ]);

        $teamMember->push();


        // Mahendra Canaguy
        $teamMember = TeamMember::create([
            'name' => 'Mahendra Canaguy',
            'job_title' => 'Digital Designer',
            'position' => 'Design',
            'bio' => "Mahendra joined Signifly in August 2020. With his background in UI and UX and an education in Graphic Design, he brings with him an expertise in developing strong user experiences. Self-motivated and goal-oriented, today, Mahendra thrives in developing engaging, thought-provoking work for a variety of clients.\nHowever, what you might not know is that outside the office, Mahendra is a car enthusiast. Everything from racecars to diecast cars to diaramas - Mahendra has a passion for the four-wheelers.",
            'years_with_signifly' => 1,
            'email' => 'mnc@signifly.com',
            'profile_image' => '/images/profiles/mahendra_canaguy.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Graphic Design',
                'school' => 'KEA'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'digital design'),
        ]);

        $teamMember->push();


        // Tore
        $teamMember = TeamMember::create([
            'name' => 'Tore Heimann',
            'job_title' => 'Technical Team Lead',
            'position' => 'Tech',
            'bio' => "Tore and Signifly joined forces back in 2016. As Technical Team Lead, he ensures that our development projects run as smoothly and efficiently as possible.\nHe does all this while assisting our clients and advising them on technology and its possibilities. Being a former developer makes him the ideal link between tech and people, and he has a way of communicating the complex world of tech in a language everybody understands.\nBike mechanic turned Developer turned Technical Project Manager, Tore now holds the title as Technical Team Lead. With degrees in multimedia design and web development from KEA – Copenhagen School of Design and Technology, he front-ended at various companies like Unisport and Rosendahls before joining Signifly – while running his own website business and doing graphic work for smaller companies.\nTore was the Technical Project Manager on such prominent projects as Mads Nørgaard's Shopify solution, a webshop and B2B platform for Karmameju, and a PIM system for Sikane.",
            'years_with_signifly' => 5,
            'phone' => '+45 2620 9049',
            'email' => 'th@signifly.com',
            'profile_image' => '/images/profiles/tore_heimann.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Multimedia Design and Web Development',
                'school' => 'KEA'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'digital design'),
            Skill::firstWhere('name', 'web development'),
            Skill::firstWhere('name', 'tech project lead'),
        ]);

        $teamMember->push();


        // Morten
        $teamMember = TeamMember::create([
            'name' => 'Morten Jensen',
            'job_title' => 'CTO & Back-end Developer',
            'position' => 'Tech',
            'bio' => "Morten joined Signifly in 2017 as a back-end developer. Since then, he's headed our large-scale projects, focusing on data structure and algorithms, API development and integrating ERP systems, and he has also built our PIM system, hooking it up to our multi-shop solutions in Shopify.\nIn 2019, Morten took on the job as Signifly's CTO, taking charge of our technological capabilities world-wide and the technical quality of all the different solutions we deliver.\nSelf-taught and self-driven, Morten, previously ran his own software development house, Foreno, before doing a stint at Sofakompagniet and then ultimately becoming Signifly’s back-end backbone. As with any world-class backend developer, you know they've done a great job when their hand in the process is invisible. Their solutions just work. But Morten insists on being front and center with our clients, advising them throughout the project.\nMorten leads the development and architecture of projects like Maersk Container Sales, our own system multi-use administration framework Travy, and the ERP integration of many of our Shopify solutions, including our project for Mads Nørgaard.",
            'years_with_signifly' => 4,
            'phone' => '+45 4113 1537',
            'email' => 'mpj@signifly.com',
            'profile_image' => '/images/profiles/morten_jensen.jpg'
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'back-end development'),
            Skill::firstWhere('name', 'data structures & algorithms'),
        ]);

        $teamMember->push();


        // Ro Kleine Sonne
        $teamMember = TeamMember::create([
            'name' => 'Ro Kleine Sonne',
            'job_title' => 'Back-end Developer',
            'position' => 'Tech',
            'bio' => "Ro joined Signifly March 2019 as a back-end developer. Before Signifly, he worked for a sharing economy app; today, he manipulates data and designs code to solve business problems and address stakeholder needs.\nHe holds a bachelor’s in Medialogy, which allows him to navigate and design modern media and technology, and his expertise in Laravel, React-Native, and Electronics helps him construct effective and efficient solutions for a variety of clients. The result is always clean design, and Ro has played a key part in Signifly’s FERMLiving, Klassik, and VardeOvne projects.\nWhen he’s not at his desk, this unofficial half-Brazilian, enjoys adventuring outdoors with his kids and playing soccer.",
            'years_with_signifly' => 2,
            'phone' => '+45 3066 0204',
            'email' => 'ro@signifly.com',
            'profile_image' => '/images/profiles/ro_kleine_sonne.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Medialogy',
                'school' => 'KEA'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'Laravel'),
            Skill::firstWhere('name', 'React'),
            Skill::firstWhere('name', 'Electronics'),
            Skill::firstWhere('name', 'back-end development'),
        ]);

        $teamMember->push();


        // Jaja
        $teamMember = TeamMember::create([
            'name' => 'Jaja Trytova',
            'job_title' => 'Front-end developer',
            'position' => 'Tech',
            'bio' => "Jaja and Signifly joined forces March 2019 when she joined the tech team as a front-end developer. As a client-oriented team player, Jaja works tirelessly to build projects that serve our clients in the right way, not just the easy way.",
            'years_with_signifly' => 2,
            'phone' => '6066 3110',
            'email' => 'ja@signifly.com',
            'profile_image' => '/images/profiles/jaja_trytova.jpg'
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'front-end development'),
        ]);

        $teamMember->push();


        // phillip
        $teamMember = TeamMember::create([
            'name' => 'Phillip Raffnsoe',
            'job_title' => 'Full-stack developer',
            'position' => 'Tech',
            'bio' => "Phillip joined Signifly at the start of 2019 as a full-stack developer. He has degrees in Multimedia design from KEA and a BSc in Software Development from ITU, and he is especially experienced in frontend frameworks, web optimization, web accessibility, concurrency and real time web applications.\nA self-proclaimed nerd, Phillip enjoys delving into graphics programming and programming language theory in his spare time. But what he might not tell you, is that he has an uncanny ability to tell you the day of the week of nearly any date.",
            'years_with_signifly' => 2,
            'email' => 'pa@signifly.com',
            'profile_image' => '/images/profiles/phillip_raffnsoe.jpg'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Multimeda design',
                'school' => 'KEA'
            ]),
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Software Development',
                'school' => 'ITU'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'front-end development'),
            Skill::firstWhere('name', 'back-end development'),
            Skill::firstWhere('name', 'web accessibility'),
            Skill::firstWhere('name', 'concurrency'),
        ]);

        $teamMember->push();


        // Marlie
        $teamMember = TeamMember::create([
            'name' => 'Marlie Dueck',
            'job_title' => 'Back-end Developer',
            'position' => 'Tech',
            'bio' => "Marlie joined Signifly in March, 2021 as a back-end developer for the Canadian team. She graduated from the University of British Columbia with a Bsc in Computer Science and specialized in full-stack web development. Marlie has a passion for making business processes smoother and data more accessible. She is passionate about Laravel and smart use of algorithms\nIn her spare time, Marlie enjoys playing classical piano and bicycling everywhere. She is also an avid pasta lover, even going so far as to make her own noodles and raviolis from scratch!",
            'years_with_signifly' => 0,
            'email' => 'md@signifly.com',
            'profile_image' => '/images/profiles/no_photo.jfif'
        ]);

        $teamMember->education()->saveMany([
            new Education([
                'type' => 'Bachelor',
                'subject' => 'Computer Science',
                'school' => 'UBC'
            ]),
        ]);

        $teamMember->skills()->saveMany([
            Skill::firstWhere('name', 'back-end development'),
            Skill::firstWhere('name', 'data structures & algorithms'),
            Skill::firstWhere('name', 'Laravel'),
        ]);

        $teamMember->push();

    }


}
