<?php
/**
 * Page content: services, projects, process, principles, etc.
 */

declare(strict_types=1);

$services = [
    [
        'number' => '01',
        'label' => 'Composition',
        'name' => 'Interior Design',
        'image' => '9.jpg',
        'alt' => 'Ivory bedroom suite with tailored furniture and soft daylight',
        'description' => 'Interior design at CASA RIVA begins with how a house is used at different hours of the day. We plan circulation, furniture, colour and joinery as one composition, so rooms feel calm rather than decorated. Every scheme is drawn, sampled and revised until the atmosphere is exact.',
    ],
    [
        'number' => '02',
        'label' => 'Form',
        'name' => 'Architecture Design',
        'image' => 'architecture-02.jpg',
        'alt' => 'Double-height interior with sculptural staircase and plaster walls',
        'description' => 'Where a project requires more than furnishing, we work on the architecture of the interior: openings, volumes, staircases, façades and the relationship between rooms. The aim is permanence — work that still feels considered a decade later.',
    ],
    [
        'number' => '03',
        'label' => 'Structure',
        'name' => 'Civil Construction',
        'image' => 'hallway-01.jpg',
        'alt' => 'Cream panelled townhouse hallway with stone floor and arched doorway',
        'description' => 'Construction is treated as part of the design, not a separate afterthought. We coordinate civil works so walls, floors and services land where the drawings intended, with site discipline that keeps the finished rooms as quiet as they were designed to be.',
    ],
    [
        'number' => '04',
        'label' => 'Craft',
        'name' => 'Modular Kitchen',
        'image' => 'kitchen-01.jpg',
        'alt' => 'Ivory kitchen with marble island, oak cabinetry and brass taps',
        'description' => 'A CASA RIVA kitchen is designed around cooking, gathering and light. Cabinetry, stone, brass and storage are specified as architecture: quiet elevations, durable worktops and hardware that feels considered every time it is used.',
    ],
    [
        'number' => '05',
        'label' => 'Joinery',
        'name' => 'Wardrobe',
        'image' => 'wardrobe-01.jpg',
        'alt' => 'Walk-in dressing room with oak millwork, brass rails and a velvet ottoman',
        'description' => 'We design wardrobes and dressing rooms as interiors in their own right: oak millwork, considered lighting, and storage that holds clothing with the same care given to the rooms beyond. The result is order without severity.',
    ],
    [
        'number' => '06',
        'label' => 'Continuity',
        'name' => 'Turnkey Projects',
        'image' => '1.jpg',
        'alt' => 'Layered drawing room with chandelier, burl tables and bay window seating',
        'description' => 'Turnkey work allows one language to run through architecture, interiors, kitchen, wardrobe and finishing. CASA RIVA directs design, procurement and site so the house is handed over complete — ready to be lived in, not merely built.',
    ],
    [
        'number' => '07',
        'label' => 'Renewal',
        'name' => 'Renovation',
        'image' => 'renovation-01.jpg',
        'alt' => 'Renovated drawing room with panelling, fireplace and contemporary seating',
        'description' => 'Renovation is an editorial act: keep the moulding, correct the plan, renew the kitchen, quiet the circulation. We restore, edit and insert contemporary work so older houses feel lighter without losing their grain.',
    ],
];

$projects = [
    [
        'name' => 'Belgravia Drawing Room',
        'category' => 'Living',
        'image' => '1.jpg',
        'alt' => 'Classical living room with crystal chandelier, green velvet chairs and burl coffee tables',
    ],
    [
        'name' => 'Mayfair Salon',
        'category' => 'Living',
        'image' => '2.jpg',
        'alt' => 'Formal salon with ivory sofa, jewel-tone chairs and a gallery of portraits',
    ],
    [
        'name' => 'Crescent Living',
        'category' => 'Living',
        'image' => '3.jpg',
        'alt' => 'Curved ivory sofa in a warm contemporary living room with arched niches',
    ],
    [
        'name' => 'Lightwell Townhouse',
        'category' => 'Living',
        'image' => '4.jpg',
        'alt' => 'Sunlit living room with arched sash window, herringbone floor and sculptural chandelier',
    ],
    [
        'name' => 'Landscape Suite',
        'category' => 'Bedroom',
        'image' => '5.jpg',
        'alt' => 'Bedroom with landscape mural, burgundy headboard and glass chandelier',
    ],
    [
        'name' => 'Scarlet Chamber',
        'category' => 'Bedroom',
        'image' => '6.jpg',
        'alt' => 'Dramatic bedroom with botanical mural, lacquered red bedside cabinets and geometric parquet',
    ],
    [
        'name' => 'Garden Bedroom',
        'category' => 'Bedroom',
        'image' => '7.jpg',
        'alt' => 'Sunlit bedroom with cane bed, window seat and sage joinery',
    ],
    [
        'name' => 'Orangery Bedroom',
        'category' => 'Bedroom',
        'image' => '8.jpg',
        'alt' => 'Bright bedroom with french doors to a terrace, floral art and a brass chandelier',
    ],
    [
        'name' => 'Sage Residence',
        'category' => 'Bedroom',
        'image' => '9.jpg',
        'alt' => 'Bedroom opening to a sitting area with sage bedding and botanical prints',
    ],
    [
        'name' => 'Calacatta Kitchen',
        'category' => 'Kitchen',
        'image' => 'kitchen-01.jpg',
        'alt' => 'Luxury kitchen with marble island and cream cabinetry',
    ],
    [
        'name' => 'Dressing Atelier',
        'category' => 'Wardrobe',
        'image' => 'wardrobe-02.jpg',
        'alt' => 'Walk-in wardrobe with oak joinery and a marble-topped island',
    ],
    [
        'name' => 'Cedar Dining',
        'category' => 'Dining',
        'image' => 'dining-01.jpg',
        'alt' => 'Long dining table with cream chairs and a brass chandelier',
    ],
    [
        'name' => 'Library Study',
        'category' => 'Architecture',
        'image' => 'study-01.jpg',
        'alt' => 'Oak-lined study with leather armchair and stone fireplace',
    ],
    [
        'name' => 'Townhouse Ascent',
        'category' => 'Architecture',
        'image' => 'architecture-02.jpg',
        'alt' => 'Sculptural staircase in a double-height plaster hall',
    ],
];

$processSteps = [
    [
        'number' => '01',
        'name' => 'Consultation',
        'description' => 'We begin by understanding your lifestyle, rooms and how you actually live in the house. No briefs, just a conversation — in person or over a call.',
        'image' => 'hallway-01.jpg',
        'alt' => 'Initial consultation meeting',
        'details' => ['Site visit & measurement', 'Understanding needs & budget', 'Scope & timeline discussion'],
    ],
    [
        'number' => '02',
        'name' => 'Design & Planning',
        'description' => 'Detailed 3D visualisations, floor plans, material palettes and furniture layouts are drawn until every room feels exactly right — before a single nail is placed.',
        'image' => 'study-01.jpg',
        'alt' => 'Design planning and 3D visualisation',
        'details' => ['3D renders & walkthroughs', 'Material & finish selection', 'Furniture & lighting layouts'],
    ],
    [
        'number' => '03',
        'name' => 'Execution',
        'description' => 'Skilled craftsmen and project managers bring your design to life. We supervise every stage — joinery, civil work, flooring, painting — so drawings survive contact with the building.',
        'image' => 'kitchen-01.jpg',
        'alt' => 'Skilled craftsmen executing the design',
        'details' => ['Civil & joinery works', 'On-site quality supervision', 'Transparent progress updates'],
    ],
    [
        'number' => '04',
        'name' => 'Handover',
        'description' => 'The house is styled, checked and handed over complete — ready to be lived in from day one. We remain available for any post-delivery support.',
        'image' => '1.jpg',
        'alt' => 'Beautifully completed and handed over room',
        'details' => ['Styling & final dressing', 'Quality walkthrough with you', 'Post-handover support'],
    ],
];

$principles = [
    [
        'title' => 'Proportion',
        'description' => 'Rooms are planned first as architecture. Furniture follows the plan, not the other way around.',
    ],
    [
        'title' => 'Material honesty',
        'description' => 'Stone, timber, linen, plaster and brass are specified for how they age, not only how they photograph.',
    ],
    [
        'title' => 'Quiet luxury',
        'description' => 'The work is meant to feel expensive in person: through spacing, joinery and light rather than ornament.',
    ],
    [
        'title' => 'Continuity',
        'description' => 'Kitchens, wardrobes and reception rooms are designed as one house, with a single material language.',
    ],
];

$reasons = [
    [
        'number' => '01',
        'title' => 'Transparent Pricing',
        'description' => 'No hidden costs, no surprise bills. We share detailed estimates before a single nail is hammered.',
    ],
    [
        'number' => '02',
        'title' => '3D Visualisation',
        'description' => 'See your rooms in full detail before execution begins. Change anything until it feels exactly right.',
    ],
    [
        'number' => '03',
        'title' => 'End-to-End Execution',
        'description' => 'From design to delivery, one team holds the thread. You deal with one studio, not ten vendors.',
    ],
    [
        'number' => '04',
        'title' => 'Pan-India Presence',
        'description' => 'Operating in 15+ cities with local expertise and national design standards on every project.',
    ],
];

$partners = [
    'Hettich',
    'Merino',
    'REHAU',
    'Saint-Gobain',
    'Stylam',
    'KAFF',
    'Futura',
    'Franke',
    'Jaquar',
    'Ruhe',
    'Philips',
    'Wipro',
    'Artisan',
    'iDecorwala',
    'Nippon Paint',
    'Urban Ladder',
    'Spitze',
    'Häfele',
];

$cities = [
    'Delhi NCR',
    'Mumbai',
    'Bengaluru',
    'Hyderabad',
    'Pune',
    'Chennai',
    'Kolkata',
    'Ahmedabad',
    'Jaipur',
    'Chandigarh',
    'Lucknow',
    'Kochi',
    'Indore',
    'Surat',
    'Coimbatore',
];

$inquiryTypes = [
    '3D Design Session',
    'Get Estimate',
    'Interior Design',
    'Modular Kitchen',
    'Wardrobe',
    'Turnkey Project',
    'Renovation',
];

$categories = ['All', 'Living', 'Bedroom', 'Kitchen', 'Wardrobe', 'Dining', 'Architecture'];

$stats = [
    ['2500+', 'Projects delivered'],
    ['500', 'Expert designers'],
    ['15', 'Cities across India'],
    ['4.9', 'Client rating'],
];

$navLinks = [
    ['Design Gallery', 'gallery'],
    ['Offerings', 'offerings'],
    ['Projects', 'projects'],
    ['Contact', 'contact'],
];
