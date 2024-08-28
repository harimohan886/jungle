@extends('front.layout.main')
@section('content')
    <main id="destination">
        <section>
            <div class="container">
                <div class="row">
                    <h1 class="main_heading text-center fw-bold">Gir National Park</h1>

                    <div class="col-lg-6">
                        <p>Hey Travellers, if you wanna know about Gir National Park then you’re at the right place. To
                            start with, Gir National Park is a wild area which is also known as Gir Forest or Gir
                            Wildlife
                            Sanctuary. It’s a famous wildlife sanctuary in Gujarat which is in India. This sanctuary is
                            famous all over the World, especially among wildlife enthusiasts for sightings of Asiatic
                            Lions.
                            This is the only habitat apart from Africa where one can spot an Asiatic Lion.
                        </p>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-4 col-md-3 col-sm-10 d-flex justify-content-center">
                                <div class="gir-destinations px-3 pt-2 ">
                                    <h4 class="text-center ">425 +</h4>
                                    <p class="text-center text-color"> bird species</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-10 d-flex justify-content-center">
                                <div class="gir-destinations  px-3 pt-2">
                                    <h4 class="text-center ">40 +</h4>
                                    <p class="text-center text-color">species mammals</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3 col-sm-10 d-flex justify-content-center">
                                <div class="gir-destinations  px-3 pt-2">

                                    <h4 class="text-center ">300 +</h4>
                                    <p class="text-center text-color">Tiger population </p>
                                </div>
                            </div>
                        </div>
                        <p class="pt-3 " id="padding-on-top">This park covers a huge area which is filled with a wide
                            variety of
                            flora and
                            fauna that attracts
                            people to come here. Not only lions, but people can also spot leopards, deer, and other wild
                            animals in this wild area. Locals also believe that if Asiatic lions were not spotted here,
                            then
                            this park would have been famous for its 425 bird species. The lion population of this park
                            is
                            523 while the tiger population is 300. With this large population of wild animals, it’s a
                            must-visit place for wildlife enthusiasts. Apart from these animals, the Gir National Park
                            is
                            also home to two different species of deer, encompassing 40 species of mammals and 425
                            species
                            of birds.
                        </p>
                        <p>
                            This wild area was established back in 1965 and covers a huge area of 1,412 square
                            kilometers.
                            It is situated in the Saurashtra region of Gujarat. This park has a different variety of
                            flora
                            than other parks which lets Asiatic Lions live here.
                            The flora of this scenic wild spot
                            consists
                            of dry deciduous forests, grasslands, and rocky hills. Various rivers such as Hiran,
                            Shetrunji,
                            Datardi, and Raval can be found here which are important to provide water for the
                            animals
                            living
                            inside this park.
                        </p>

                    </div>
                    <div class="col-lg-6 ">
                        <img src="{{ asset('front/assets/img/destination/Tiger Face/tiger3.png') }}" alt=""
                            width="100%" height="100%">
                    </div>
                    <div class="col-lg-12"> <span class="data-hide" style="display: none;">
                            <p>
                                This park was made for the conservation of Asiatic Lions, however,
                                other
                                animals along with different flora can be seen here.People, tourists, wildlife
                                enthusiasts,
                                nature lovers or you can say travelers can enjoy
                                spotting
                                animals and different species of plants of Gir National Park by going for jeep safari
                                rides.
                                The
                                forest department has allowed jeep safaris for tourism in this park. People can book
                                their
                                jeep
                                safaris and then they can enjoy the safari in this park. These safaris are open and let
                                people
                                enjoy the scenic views of the jungle along with animal sightings.
                            </p>


                            <p class="pt-2">Along with a safari in Gir National Park, people can enjoy a safari in
                                Devalia
                                Safari
                                Park, a safari
                                towards Kankai Mata Temple, and a safari in Girnar Hills. So, Devalia Safari Park is a
                                fenced area
                                inside Gir National Park and it’s safer than the park because it’s more like a zoo with
                                fencing.
                                Now,
                                Kankai Mata Temple is located 25km inside the Gir National Park and a safari is needed
                                to go
                                towards
                                that temple. People cannot go to that temple on their own vehicles, they have to book a
                                safari and
                                need
                                a permit to go to the temple just like the jeep safari ride. During a safari towards the
                                temple,
                                people
                                can spot various flora and fauna of the wild Gir National Park. Last but not least, a
                                safari
                                in
                                Girnal
                                Hills is all about decreasing the tourism pressure on Gir National Park. Girnar Hills
                                are
                                just like
                                Gir
                                National Park and people can enjoy a safari in these hills also. They need to book the
                                safari in
                                advance
                                as not a lot of safaris are available here. Only one route is there in Girnar Hills and
                                people can
                                enjoy
                                a thrilling ride with spottings of animals here also.
                            </p>

                        </span>
                        {{-- <div class="col-lg-12 d-flex justify-content-end"> --}}
                        <a class="fw-bold tg-btn" href="#" onclick="toggleHiddenContent(event)">
                            Read more +
                        </a>
                        {{-- </div> --}}
                    </div>
                </div>

            </div>
        </section>
        <section style="background: #000;color:rgb(215, 209, 209)">
            <div class="container-fluid">
                <div class="row mt-4 ">

                    <div class="col-lg-4 p-0">
                        <img src="{{ asset('front/assets/img/HistoryofGir.webp') }}" alt="" width="100%"
                            height="100%">
                    </div>
                    <div class="col-lg-8 p-5" id="padding-content">
                        <h4 class="fs-3 text-color-main">History of Gir National Park</h4>

                        <p>Gir National Park has a fascinating history that dates back to the 19th century. So, let’s
                            rewind
                            to the 19th century. Back then, hunting was very popular and was considered a sport among
                            the
                            royals in India. At that time, the Nawabs of Junagadh ruled over the region where Gir is
                            located. They were ruling that area and were passionate hunters. At that time, a lot of
                            Lions
                            were there in Gir and those were the prized targets for royals. The Royals used to invite
                            the
                            British colonists for hunting expeditions. As a result, by the end of the 19th century, the
                            lions were almost on the brink of extinction due to excessive hunting and habitat loss.
                        </p>
                        <p>Here’s where the history took a twist. In the early 20th century, the Nawab of Junagadh at
                            that
                            time realized that the lion population was declining day by day, and thus he decided to ban
                            hunting and took measures to protect the lions. He was a hunter but turned into a
                            conservationist!

                        </p>
                        <p>After independence, the Indian government took control of the park and used more conservation
                            techniques. Back in the year 1965, this area was established as a wildlife sanctuary and the
                            main aim was to create a safe haven for the Asiatic lions. After that, along with Asiatic
                            Lions,
                            several other animals like leopards, jungle cats, honey badgers, chital, nilgai, deer, etc,
                            and
                            a lot of birds with reptiles and insects were conserved here. Finally, after a decade in
                            1975,
                            Gir was officially declared a national park, covering around 258 square kilometers. Making
                            this
                            spot a national park was important for giving the Lions and other wild animals a secure and
                            safe
                            habitat to live in.
                        </p>
                        <p>Now this park is proof of the good conservation of Asiatic Lions with around 674 of them
                            roaming
                            around. Furthermore, it’s a biodiversity hotspot with over 40 species of mammals and 425
                            species
                            of birds. This success is attributed to dedicated efforts by forest officials, local
                            communities, and conservationists.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section
            style="background-image:url('/front/assets/img/bgimg/bgimg1.jpg');background-repeat:no-repeat; background-size:cover ;background-color:#F6F6F6;;  ">

            <div class="container pb-4 pt-2">
                <h2 class="main_heading text-center fw-bold">Popular Tourist Attractions
                </h2>

                <div class="row mt-4 pb-lg-3 pb-sm-0">

                    <div class="col-lg-4 margin-bottom">
                        <div class="single-assessment text-center">
                            <i class="fa fa-car fs-1 text-color-main pb-2" aria-hidden="true"></i>
                            <a href="#">
                                <h3 class="text-dark fw-normal pb-2">Somnath Temple</h3>
                            </a>
                            <p>
                                Somnath is a popular place among Hindus and they consider it as a pilgrimage site. This
                                temple is located just at a distance of 56 km from Gir and if you’re coming to Gir then you
                                should definitely go to Somnath to take blessings.

                                <span class="data-hide2" style="display: none;">This place is the first of twelve holy
                                    jyotirlingas that emerged in India and because of this, it’s a famous spot. It’s a point
                                    of
                                    meeting of three rivers named Kapila, Hiran, and Saraswati. Here, one can enjoy a show
                                    around 7:45 in the evening with the lighting and sound of the great Indian Actor Amitabh
                                    Bachchan.
                                </span>
                            </p>
                            <a href="#" class="garden-btn move-eff mt"
                                onclick="toggleDetails(event)"><span>Details</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-bottom">
                        <div class="single-assessment text-center">
                            <i class="fa fa-car fs-1 text-color-main pb-2" aria-hidden="true"></i>
                            <a href="#">
                                <h3 class="text-dark fw-normal pb-2">The Uperkot Fort
                                </h3>
                            </a>
                            <p>
                                As the name says it’s a fort that is located around 76.5 km from the park. It was built back
                                in 319 BC by the Mauryan emperor Chandragupta and it has been rebuilt 16 times over the last
                                800 years.Several materials are used to
                                <span class="data-hide2" style="display: none;">rebuild this
                                    fort such as sandstones, granite
                                    stones, and limestones.
                                    Also, the walls of this fort are very high
                                    and one can find old structures like step wells, palaces, and temples inside this famous
                                    Fort. It’s a historical treasure and attracts tourists from all over the World.

                                </span>
                            </p>
                            <a href="#" class="garden-btn move-eff mt"
                                onclick="toggleDetails(event)"><span>Details</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-bottom">
                        <div class="single-assessment text-center">
                            <i class="fa fa-car fs-1 text-color-main pb-2" aria-hidden="true"></i>
                            <a href="#">
                                <h3 class="text-dark fw-normal pb-2">Durbar Hall Museum </h3>
                            </a>
                            <p>
                                This museum was founded back in the year 1947 and it’s famous among people for its
                                collection of silver thrones, gold-embroidered carpets, silver art objects, etc. The hall of
                                this museum represents the royal assembly

                                <span class="data-hide2" style="display: none;">hall of the ex-rulers of the old Junagadh
                                    state
                                    and many people come here to see that. This place is around 76 km from the Sasan
                                    Gir National Park. It has belongings of nawabs which include arms, photographs of
                                    historical importance, miniature paintings, textiles, carpets, etc. One can visit this
                                    museum from 10 am to 5 pm.

                                </span>
                            </p>
                            <a href="#" class="garden-btn move-eff mt"
                                onclick="toggleDetails(event)"><span>Details</span></a>
                        </div>
                    </div>

                </div>
                <div class="row mt-lg-4 mt-lg-0 pb-lg-3 pb-sm-0">

                    <div class="col-lg-4 margin-bottom">
                        <div class="single-assessment text-center">
                            <i class="fa fa-car fs-1 text-color-main pb-2" aria-hidden="true"></i>
                            <a href="#">
                                <h3 class="text-dark fw-normal">Girnar Hills </h3>
                            </a>
                            <p>
                                These hills are around 80 km from Gir National Park and these hills are popular among Hindu
                                and Jain communities for pilgrimage. The pilgrimage of Girnar needs thousands of steps to
                                reach the top and in between one can
                                <span class="data-hide2" style="display: none;">find various Hindu and Jain temples. It
                                    needs physical
                                    strength to climb this hill and reach the top at Guru Dattatreya Temple. People can also
                                    enjoy a jeep safari ride in these hills after a thrilling safari in Gir National Park.

                                </span>
                            </p>
                            <a href="#" class="garden-btn move-eff mt"
                                onclick="toggleDetails(event)"><span>Details</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-bottom">
                        <div class="single-assessment text-center">
                            <i class="fa fa-car fs-1 text-color-main pb-2" aria-hidden="true"></i>
                            <a href="#">
                                <h3 class="text-dark fw-normal">Nalsarovar Bird Sanctuary
                                </h3>
                            </a>
                            <p>
                                This sanctuary is famous among many birdwatchers because it is the largest water bird
                                sanctuary in India. This sanctuary was established back in 1969 and from that time it's a
                                popular weekend getaway that is located close to Gir National Park.

                                <span class="data-hide2" style="display: none;">A lot of birds can be
                                    spotted at this scenic place including pied woodpecker, black-headed cuckoo, eagles, and
                                    many others. Near this sanctuary, people can take blessings from the Lord Krishna
                                    Temple.

                                </span>
                            </p>
                            <a href="#" class="garden-btn move-eff mt"
                                onclick="toggleDetails(event)"><span>Details</span></a>
                        </div>
                    </div>
                    <div class="col-lg-4 margin-bottom">
                        <div class="single-assessment text-center">
                            <i class="fa fa-car fs-1 text-color-main pb-2" aria-hidden="true"></i>
                            <a href="#">
                                <h3 class="text-dark fw-normal">Zanzari Waterfall
                                </h3>
                            </a>
                            <p>
                                This waterfall is around 120 km from the park and people need to track a little bit to reach
                                here. One can enjoy nice views and also you can see the rural area of Gujarat. This one is
                                famous for its multi-level falls

                                <span class="data-hide2" style="display: none;">
                                    which create different ponds at different levels.
                                    Travellers can explore different ponds and spend a fun time with family and friends
                                    here.

                                </span>
                            </p>
                            <a href="#" class="garden-btn move-eff mt"
                                onclick="toggleDetails(event)"><span>Details</span></a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section>

            <h2 class="main_heading text-center fw-bold">Flora & Fauna<span><img class="patti-img"
                        src="https://cdn-icons-png.flaticon.com/128/3032/3032259.png" alt="Flora & Fauna"
                        height="40px"></span>
            </h2>
            <div class="container-fluid" style=" background:#000; color:white">
                <div class="row   d-flex justify-content-center pb-3">
                    <div class="col-lg-10">
                        <ul class="nav nav-pills mb-3 d-flex justify-content-center pt-4" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active px-5 fw-semibold" id="pills-home-tab"
                                    data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab"
                                    aria-controls="pills-home" aria-selected="true">Flora </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link px-5 fw-semibold" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">Fauna</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <p>

                                    Gir National Park attracts tourists from all parts of the World as it has more than 400
                                    plant
                                    species. This park is the largest dry deciduous forest in western India. In the easter
                                    area
                                    of
                                    this park, one can easily find Teak which covers nearly half of the forest's total area.
                                    Other
                                    species that are found in this big park include Acacia, Charal, Siris, Amli, Umro, Ber,
                                    Kharanj,
                                    Jamun, Babul, Vad, Kalam, Flame of the Forest, Zizyphus, Tendu and Dhak.
                                </p>
                                <p>

                                    This park also has broad-leaved trees that help provide a soothing
                                    shade
                                    in this park. Because of
                                    afforestation, casuarina and Prosopis have been planted along the coast borders of gir
                                    which
                                    are
                                    important for this habitat.
                                </p>
                                <p>

                                    Other than this, the forest of Gir also consists of Peepal, acacia, neem, some wild
                                    flowering
                                    shrubs, and all forms of grasses from taller to smaller. Also, wide range of bamboo
                                    species
                                    can
                                    also be found in this scenic park.
                                </p>
                                <p>

                                    Out of them all, the main flora that is found here in large numbers
                                    includes Teak, Ber, Khair,
                                    Hermo, Dudhlo, Ashitro, Modad, Desi bevel, Sadad, Timru, Khakhro, Dhavdo, Saledi, etc.
                                </p>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <p>This park is a huge space and around 40 species of mammals and 425 species of birds call
                                    this
                                    area home. Asiatic Lions are famous all over the World and they can be found in Gir
                                    National
                                    Park. Because of the sightings of Asiatic Lions, a lot of people from different parts of
                                    the
                                    world like to visit Gir National Park. Apart from Africa, this is the only place where
                                    one
                                    can
                                    see Asiatic Lions. Leopards are also found in great numbers in this huge park. Apart
                                    from
                                    these
                                    two, this park is home to 38 species of animals, 27 species of reptiles, and more than
                                    300
                                    species of birds.
                                </p>
                                <p>
                                    Mammals of this park include Asiatic Lions, porcupines, hares, jungle cats, black
                                    hyenas,
                                    Indian
                                    leopards, Indian mongooses, golden jackals, chital, four-horned antelope, nilgai,
                                    sambar,
                                    wild
                                    boar, chinkara, striped hyenas, Bengal fox, Indian gray mongoose, honey badger, ruddy
                                    mongoose
                                    with many more.

                                </p>
                                <p>Some of the common birds that are found here are Dalmatian Pelican Pelecanus Crispus,
                                    Greater
                                    Spotted Eagle Aquila clanga, Indian Skimmer Rynchops Albicollis, Oriental White-backed
                                    Vulture
                                    Gyps bengalensis, Greenish Warbler, Pigeons, Griffon Eurasian Predator, Wavering Hawk
                                    Eagle,
                                    Bonelli's Eagle, Indian Pitta-Quail, and Woodpeckers like the Crested, Treeswift, Pygmy
                                    woodpecker and Long-billed Vulture Gyps indicus with many more.

                                </p>
                                <p>Some reptiles also call this park a home such as Common Keeled Skink, Snake Skink, Marsh
                                    Crocodile, Flap Shell Turtle, Indian Chameleon, Common Sand Boa, Indian Star Tortoise,
                                    Indian
                                    Wall Lizard, Common Garden Lizard, Fan Throated Lizard, Monitor lizard, Hare Tortoise,
                                    Red
                                    Sand
                                    Boa, Common Monitor Lizard, Marsh Crocodiles, etc.</p>
                                <p>
                                    Out of them all, the main fauna of this park that are found in large numbers include
                                    Lion,
                                    Leopard, Chital, Fox, Sambar, Civets, Bule bull, Jackal, Crocodile, Chaushinga,
                                    Chinkara,
                                    Wild
                                    Boar, Langur, Hyena, Mongoose, Indian pitta, Tawny eagle, Malabar whistling thrush,
                                    Crested
                                    serpent eagle, King vulture, Orange-headed ground thrush, Paradise flycatcher,
                                    Black-naped
                                    flycatcher, Pelicans, Peafowl Bonelli’s eagle, Crested hawk eagle, Painted storks, etc.


                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row margin-in-besttime">
                    <h2 class="main_heading text-center fw-bold">Best Time To Visit
                    </h2>

                    <div class="col-lg-12 p-4 " style="border: 2px solid green; ">
                        <p>Gir National Park remains open from<span class="fw-bold"> 16 October to 15 June</span> every
                            year, and it is
                            closed in monsoon
                            season. Many people like to visit this park during hotter months because wildlife
                            sightings are
                            better. People who can bear the heat like to visit this park from April to June because
                            many
                            wildlife can be spotted near water bodies.
                        </p>
                        <p>
                            But, the best time to visit this park is during the winter months from<span class="fw-bold ">
                                December to March.</span> This
                            period is considered the best season because the weather remains pleasant during these
                            months of
                            the year. Also, many migratory birds can also be spotted and people can enjoy a nice ride
                            without bearing the heat. Lions also remain active and wildlife spottings are better. Make
                            sure
                            to keep a water bottle, and light jacket during cooler months when going for a morning
                            safari in
                            this scenic park. Also, the park looks beautiful because many flowering green plants grow
                            this
                            season after monsoons.

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <h2 class="main_heading text-center fw-bold">Types of Safari
                    </h2>
                    <p class="fw-bold text-center ">Gir National Park’s forest department only allows jeep safari to go
                        inside the park. One can
                        enjoy a jeep safari ride in this huge park in Gujarat.
                    </p>
                    <div class="col-lg-6">
                        <img src="{{ asset('front/assets/img/slider/slider6.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-6">

                        <p> <b class="fs-6"><mark class="fst-italic">Jeep Safari</mark></b><br>This is the only
                            available
                            option to enjoy a
                            safari
                            in
                            Gir
                            National Park.
                            This
                            safari is done in
                            gypsies and they will take you deep inside the Jungle to enjoy sightings of Asiatic Lions along
                            with other wild animals. Two kinds of Safaris are available, A and B - In category A, 4 seater,
                            6 seater and 8 seater gypsies are there, you can choose the one that you like. In category B,
                            only a 6-seater gypsy is available that is a little bit older version but not older than the one
                            prescribed under the scrapping policy of the Government of Gujarat to drive old vehicles.
                        </p>
                        <p>Jeep Safaris is a good vehicle and it’s smaller in height that lets you see the lions and other
                            animals from a close look. They can also go on narrow paths inside the Jungle ensuring better
                            sightings. To enjoy a safari in Gir, make sure to make an online booking in advance before the
                            travel date on your preferred timings. Slots are not easily available as a lot of people come
                            here every year and most of them make online bookings in advance before the travel date. Don’t
                            think that you’ll go there and after that you can get the tickets, to avoid disappointments,
                            make sure to book your thrilling safari in advance. One thing that is important to remember is
                            that a maximum of 6 adults along with a child (between 3-12 years) are allowed to go on a ride
                            inside a safari.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <h2 class="main_heading text-center fw-bold">Do’s and Don’ts

                    </h2>

                    <div class="container container-1">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="card do-list">
                                    <div class="card-header card-header-1">
                                        <i class="fas fa-check-circle"></i> Do’s inside Gir
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <i class="fas fa-check"></i> You can enter the park after taking
                                            permits for the jeep safari.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check"></i> Kindly carry a litter bag when
                                            coming for a jeep safari to throw waste in it. After the safari,
                                            throw that litter bag in a dustbin.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check"></i> Drive inside the forest on the
                                            speed limit which is 20km/hr.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check"></i> When coming for a safari inside the
                                            park, be sure to take an official registered Nature's guide for
                                            safety reasons. The guides have good knowledge about the flora
                                            and fauna and also they can help in better spottings.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check"></i> Respect the wild animals as you’re
                                            in their home. Maintain a safe distance as cute animals can also
                                            be dangerous inside this park.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check"></i> Listen to the melodious sound of
                                            the forest and birds in Gir instead of playing a radio or
                                            transistor.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check"></i> When coming for a safari, it is
                                            advised to every tourist that they should try to wear clothes of
                                            natural colors like khaki, brown or beige and some other dull
                                            colors because animals get disturbed by the bright ones.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check"></i> Try to stay quiet during your
                                            thrilling rides.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check"></i> Follow the instructions of your
                                            naturalist or you can say guide.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-check"></i> Stay calm even if you see an
                                            Asiatic Lion coming towards your safari.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 mb-4">
                                <div class="card dont-list">
                                    <div class="card-header card-header-1">
                                        <i class="fas fa-times-circle"></i> Don't inside Gir
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> Carrying firearms inside the forest
                                            is strictly prohibited so don't try to take them.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> Smoking or lighting fires can cause
                                            forest fires so don’t do that inside the premises of the park.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> Do not shout or make noise even if
                                            you spot animals coming towards your jeep safari in Gir,
                                            Devalia, Girnar, or Knakai ride.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> Cooking anything or taking nonveg
                                            inside the park is not allowed.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> Do not play any transistors and
                                            tape recorders.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> Do not tell your driver to take
                                            your safaris off the designated route, as you can get lost or it
                                            can damage the plants and animals.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> Do not make noise or blow horns
                                            inside the park’s premises.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> You cannot enter this park without
                                            a permit.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> Don’t try to tease or feed the
                                            animals as it can cause severe penalties.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> Do not try to touch an animal or
                                            plant as it’s a wild area, it can be dangerous. See them from a
                                            distance.
                                        </li>
                                        <li class="list-group-item">
                                            <i class="fas fa-times"></i> The permit that you’ve taken to go
                                            inside the park is non-transferable so do not try any kind of
                                            unfair means.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </main>

    @push('scripts')
        {{-- <script>
            function toggleHiddenContent(event) {
                event.preventDefault();

                // Find the nearest .data-hide element
                var hiddenContent = event.target.previousElementSibling;

                if (hiddenContent.style.display === "none" || hiddenContent.style.display === "") {
                    hiddenContent.style.display = "block";
                    event.target.innerText = "Read less -";
                } else {
                    hiddenContent.style.display = "none";
                    event.target.innerText = "Read more +";
                }
            }
        </script> --}}
        {{-- <script>
            function toggleDetails(event) {
                event.preventDefault(); // Prevent default link behavior
                const content = document.querySelector('.data-hide2');
                if (content.style.display === 'none') {
                    content.style.display = 'inline'; // Change this to 'block' if you want it to take full width
                    event.currentTarget.innerHTML = '<span>Hide Details</span>'; // Update button text
                } else {
                    content.style.display = 'none';
                    event.currentTarget.innerHTML = '<span>Details</span>'; // Update button text
                }
            }
        </script> --}}
    @endpush
@endsection
