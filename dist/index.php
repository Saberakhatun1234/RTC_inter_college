<?php
 include("header.php")
?>


<!-- Carousel Section -->
<section class="relative w-full overflow-hidden rounded-xl mb-10 pt-38">
  <img
    id="carousel-image"
    src="./images/infr2.jpg"
    alt="Carousel Image"
    class="w-full h-96 object-cover transition-opacity duration-700 ease-in-out sm:h-[28rem]"
  />

  <!-- Text Overlay -->
   <div id="carousel-caption"
     class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 
            bg-opacity-0 text-2xl sm:text-4xl font-extrabold px-6 py-3 z-10 
            bg-clip-text text-transparent 
            bg-gradient-to-br from-amber-600 via-rose-600 to-red-700 text-center">
  Welcome to RTC Inter College!
</div>


  <!-- Prev Button -->
  <button
    id="prevBtn"
    class="z-20 absolute top-1/2 left-2 sm:left-4 transform -translate-y-1/2 font-extrabold bg-opacity-50 text-white p-2 sm:p-3 rounded-full hover:bg-opacity-80"
  >
    ❮
  </button>

  <!-- Next Button -->
  <button
    id="nextBtn"
    class="z-20 absolute top-1/2 right-2 sm:right-4 transform -translate-y-1/2 font-extrabold  bg-opacity-50 text-white p-2 sm:p-3 rounded-full hover:bg-opacity-80"
  >
    ❯
  </button>
</section>

<!-- welcome section  -->
 <section class="relative bg-gradient-to-br from-blue-50 to-white py-16 px-4 sm:px-8 lg:px-24">
  <div class="absolute inset-0 bg-[url('https://source.unsplash.com/featured/?college,campus')] bg-cover bg-center opacity-10 z-0"></div>

  <div class="relative z-10 max-w-5xl mx-auto bg-white/80 backdrop-blur-md shadow-xl rounded-xl p-10 border-l-8 border-blue-600">
    <h2 class="text-4xl sm:text-5xl font-extrabold text-blue-900 mb-6 text-center tracking-wide">
      Welcome to RTC Inter College
    </h2>
    <p class="text-gray-800 text-lg sm:text-xl leading-relaxed mb-5 transition duration-300 hover:text-blue-800">
      RTC Inter College is a world-class educational institution dedicated to providing quality education and enabling well-rounded development among its students.
    </p>
    <p class="text-gray-800 text-lg sm:text-xl leading-relaxed mb-5 transition duration-300 hover:text-blue-800">
      Located in a peaceful and highly accessible campus, our college fosters academic distinction, individual excellence, and social responsibility.
    </p>
    <p class="text-gray-800 text-lg sm:text-xl leading-relaxed mb-5 transition duration-300 hover:text-blue-800">
      Our aim is to bridge the gap between conventional learning and modern education by integrating innovative teaching methods with strong values. Students here are empowered through expert faculty, advanced infrastructure, and a learner-centered approach.
    </p>
    <p class="text-gray-800 text-lg sm:text-xl leading-relaxed mb-5 transition duration-300 hover:text-blue-800">
      At RTC Inter College, we believe education is not just about books and exams—it’s about shaping character, building confidence, and preparing students for life.
    </p>
    <p class="text-gray-800 text-lg sm:text-xl leading-relaxed transition duration-300 hover:text-blue-800">
      Come, learn, grow, and transform with us into future-ready citizens who make meaningful contributions to the world.
    </p>
  </div>
</section>

<!-- scrolling effect -->


<section class="overflow-hidden bg-blue-400">
  <div class="relative w-full">
    <div class="flex animate-marquee whitespace-nowrap  pause-on-hover">
      <!-- First set of links -->
      <div class="flex items-center gap-x-12 px-4 py-2 text-sm sm:text-base w-max">
        <a href="#" class="inline-block text-white hover:underline ">
          📢 Welcome to RTC Inter College Admission Portal!
        </a>
        <a href="#" class="inline-block text-white hover:underline">
          ✨ Admission Open for Class 11 & 12 – Apply Now!
        </a>
        <a href="#" class="inline-block text-white hover:underline">
          📚 Quality Education | 🏫 Modern Campus | 👨‍🏫 Experienced Faculty
        </a>
      </div>

      <!-- Duplicate set of links for seamless scrolling -->
      <div class="flex items-center gap-x-12 px-4 py-2 text-sm sm:text-base w-max">
        <a href="#" class="inline-block text-white hover:underline">
          📢 Welcome to RTC Inter College Admission Portal!
        </a>
        <a href="#" class="inline-block text-white hover:underline">
          ✨ Admission Open for Class 11 & 12 – Apply Now!
        </a>
        <a href="#" class="inline-block text-white hover:underline">
          📚 Quality Education | 🏫 Modern Campus | 👨‍🏫 Experienced Faculty
        </a>
      </div>
    </div>
  </div>
</section>

<style>
  @keyframes marquee {
    0% {
      transform: translateX(0%);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .animate-marquee {
    animation: marquee 20s linear infinite;
  }

  @media (max-width: 768px) {
    .animate-marquee {
      animation-duration: 30s;
    }
    /* .pause-on-hover:hover {
  animation-play-state: paused;
} */
  }
</style>
<!-- Principal Section -->
<section class="mt-10 flex flex-col lg:flex-row items-center gap-6 px-4">
  <!-- Principal Image -->
  <div>
    <img src="https://Placehold.co/400x400" alt="Principal" class="rounded shadow-2xl w-full max-w-[400px]">
  </div>

  <!-- Message & Navigation -->
  <div class="lg:ml-10 flex-1 text-center">
    <p class="text-2xl font-bold shadow p-4">
      Message From Principal
    </p>

    <div class="h-72 w-full overflow-y-auto p-4 bg-gray-100 border-[2px] border-e-amber-400 border-s-amber-400 border-t-blue-400 border-b-blue-400 rounded-lg mt-4 text-left">
      <p>
        <span class="text-2xl text-blue-600 font-bold">W</span>
        <span class="text-xl">e Lorem ipsum dolor sit amet...</span>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sapiente laboriosam iure numquam cum nesciunt earum, error odio iste possimus, molestias nihil enim, nulla architecto commodi delectus similique quibusdam ullam?
        Praesentium at sit, iste id ut nihil cupiditate odio nisi animi? Cum perspiciatis veniam fugiat, natus voluptatibus magni, tempore, iusto doloremque vero doloribus magnam voluptatum sint voluptates quod rem. Molestiae!
        Accusantium et molestias sint in minima iste error? Explicabo officia quia, quidem nihil esse ea eius molestias quaerat! Praesentium assumenda tenetur quos, quas ut vero harum nostrum impedit voluptates distinctio.
        Possimus error, aut dolore velit assumenda enim expedita eligendi distinctio blanditiis suscipit delectus, ex vero a rem. Quasi quis iste autem quia. Repellat reprehenderit nam distinctio omnis asperiores, officiis modi.
        Eveniet, consequatur recusandae. Ipsam eos repellendus pariatur dicta. Mollitia optio accusamus culpa sunt quod officiis ratione modi et earum? Quidem, odit fugiat quisquam error quo nesciunt qui dolorum ipsa alias?
        Similique, magni ex cum impedit deserunt officiis veritatis totam maiores repellat, at quis qui commodtur minima, est nihil soluta sapiente totam placeat! Cum unde, alias doloremque sunt eos accusamus fugit atque sequi?
        Doloremque aliquid neque beatae numquam voluptate minus iure exercitationem, natus facilis impedit? 
        Sequi officia nemo, debitis laudantium tenetur asperiores, deleniti fuga culpa voluptatem voluptas optio atque eos quasi nihil ex reiciendis libero, nesciunt nostrum? Cupiditate, dicta. Deserunt recusandae voluptatum odio dignissimos itaque!
        Ipsam vero optio aliquid alias suscipit consequatur! Amet doloribus labore incidunt repellendus autem modi explicabo quis fugiat id hic quas harum officia molestias, expedita, cupiditate nesciunt soluta facilis mollitia et.
        Voluptatem quas obcaecati voluptates consequatur cumque similique nihil dolore expedita earum corporis molestias qui eum odit, ullam dicta, architecto, nesciunt quidem? Placeat commodi provident illum? Veniam optio magni dignissimos assumenda.
        Non officia labore, veniam amet illo tempora dolorum laboriosam, provident reiciendis, eius dicta placeat deleniti aperiam perspiciatis minus. Quasi asperiores officia veritatis a veniam sequi velit ipsam nesciunt non quae.
        Laudantium quia aperiam quo. Illo deserunt maxime neque sunt nisi repudiandae quibusdam! Repellat nemo voluptates ex ea. Repudiandae incidunt, dolore nam architecto cupiditate, voluptate, nihil fugiat sequi vitae officiis asperiores!
        Odio vitae odit blanditiis debitis aliquam, deleniti voluptate vel ea nihil quibusdam optio, nemo eum doloremque et sit laborum nobis distinctio molestiae porro quasi sint excepturi expedita eaque. Ipsum, velit.
        Aperiam fugit voluptatem laborum ullam. Pariatur quaerat suscipit minima mollitia omnis reprehenderit modi perferendis soluta laudantium est, laborum officia ex nisi perspiciatis nobis inventore praesentium cumque sequi reiciendis et! Fugit!
        Quas, voluptatum impedit ipsam sed cum totam quidem enim quos fuga ea ipsa quaerat commodi hic numquam, perferendis dignissimos, nisi incidunt necessitatibus quis delectus doloribus itaque sint facere! Aspernatur, natus?
        Accusamus molestiae eos doloremque voluptatibus voluptatem esse commodi. Aut pariatur soluta sed eaque optio aperiam corporis earum iure vel eum voluptates repellat quas dicta facilis sit itaque, temporibus rerum rem.
        At, ullam suscipit asperiores harum impedit sequi cum nemo esse dolorem, magnam soluta nostrum consequuntur praesentium iste optio sapiente sit explicabo veritatis. Laborum eos ab modi quia praesentium necessitatibus earum!
        Accusantium inventore nisi quo placeat, quaerat eum, temporibus voluptates repellendus eos deserunt quis possimus sapiente unde reiciendis maiores itaque eius maxime eaque. Error ducimus amet assumenda atque esse magni dicta?
        Pariatur expedita corrupti molestiae officiis inventore quisquam, vel odio dicta delectus tempore recusandae, voluptatem omnis? Mollitia quis eius similique nihil autem consequatur perferendis sint adipisci officiis. Libero tenetur aut in?
        Quos enim soluta est adipisci vitae a, necessitatibus quas eum porro quidem et quasi aperiam, aut error! Rerum officiis in expedita harum, eius aperiam fuga ad est totam dignissimos beatae.
        Beatae voluptatem ipsam optio quisquam possimus molestias omnis? Enim saepe deserunt eos nam ipsam veritatis! Nostrum quis possimus expedita hic, eveniet laboriosam natus? Veniam optio soluta, adipisci porro nesciunt voluptatibus!
        Est nemo accusamus impedit accusantium ipsa odio ea vitae, delectus velit. Expedita doloribus molestiae autem commodi dolores? Eaque perspiciatis, pariatur dolores voluptatibus culpa est itaque quisquam odit perferendis illum nihil.
        Velit blanditiis omnis incidunt sunt enim vitae similique voluptates possimus tempora voluptas magnam libero, nisi ad quae ipsam beatae eveniet voluptatum quam iusto quas, porro dignissimos? Totam expedita natus accusamus!
        Aspernatur repellendus at, quaerat quod nulla minima earum repudiandae quisquam quos? Obcaecati expedita magni, animi ab eum alias quidem. Debitis repudiandae tenetur totam et ratione numquam, vel itaque commodi soluta?
        Id, minus veritatis consequuntur quas earum, recusandae ullam molestiae quidem libero quis reprehenderit exercitationem quos eveniet corrupti? Distinctio nobis perspiciatis ipsam repudiandae, ducimus quasi, eligendi ut maxime ipsa odit officia.
        Atque itaque suscipit reprehenderit nihil incidunt maiores velit provident corporis! Atque accusamus voluptatum fugiat sint. Repellendus, repudiandae deserunt. Voluptates laudantium voluptatem autem molestiae. Porro temporibus officia quos! Fugit, exercitationem corrupti.
        Dolorem minus repudiandae itaque odit expedita? Laudantium perferendis, quis eius nam aperiam inventore, nostrum deleniti ipsum reprehenderit explicabo laborum perspiciatis quia praesentium saepe laboriosam vel! Beatae eum sunt eveniet iure?
        A voluptate, ratione quasi consectetur nihil quia, odio exercitationem voluptatum sed numquam dolorum? Molestias unde cum repellendus expedita explicabo error libero fugit omnis, quisquam delectus veritatis, possimus sint sunt praesentium?
        Consequuntur eum facilis quis. Nulla, expedita? Quod, quia illum quas vel suscipit nulla quidem similique minus, facilis excepturi ratione ab beatae soluta labore quaerat. Similique quia magni libero in quam?
        Error veritatis pariatur tempore facere suscipit, nemo itaque odit, dolores quam ipsum vitae quaerat aperiam accusantium? Dolor culpa ipsum sit doloribus animi laboriosam debitis impedit minima. Earum iste modi iure.
        Delectus magnam error quae, nobis in veniam, ullam vitae sit tenetur quasi reiciendis dicta aperiam eligendi asperiores exercitationem distinctio culpa hic facilis ipsa, deserunt quisquam? Exercitationem, unde. Quos, ea vitae.
        Aliquid delectus totam in eius similique, itaque commodi nesciunt vitae maiores consectetur ab ipsam, eos, dolorem numquam! Facere non accusantium recusandae nobis, culpa ut. Dolorum illum necessitatibus voluptatibus fugiat harum!
        Sint, maxime perspiciatis quae laborum aspernatur quisquam. Nostrum, saepe ipsa! Saepe modi deserunt quidem illo quas quis excepturi officiis laboriosam voluptate, distinctio amet eligendi! Necessitatibus itaque iusto ipsam deleniti nisi.
        Aliquid id omnis suscipit cupiditate sapiente debitis maiores beatae earum dolorum blanditiis consequuntur rerum, animi totam dolore vero? Beatae sapiente veritatis doloribus eligendi ipsam quo asperiores dolore nulla nesciunt temporibus?
        Placeat repudiandae ad magnam unde, corporis error nostrum culpa vel ab, quam voluptatibus sint possimus molestias maiores aperiam? Libero magnam exercitationem porro, eos minima temporibus incidunt quis dolor. Tempore, velit!
        Repellendus sint nobis veniam temporibus sequi voluptas tempore delectus eveniet nulla at inventore explicabo, nam impedit quis a reprehenderit animi incidunt eaque laudantium, quia nihil aperiam! Ut, porro sed. Incidunt.
        Ex fuga facilis soluta laborum omnis, accusantium suscipit veniam, nam atque impedit commodi. Quia fugit sit voluptates omnis, necessitatibus corrupti quibusdam modi error consequuntur incidunt molestias velit atque autem molestiae?
        Modi, autem vero iste assumenda omnis pariatur ratione optio fugit asperiores quo vitae dolorum, laudantium distinctio. Ab amet quod accusamus ex nemo impedit praesentium, inventore libero odio, debitis consectetur commodi.
        Labore ipsam, illo earum ex laborum tempore voluptatum, culpa sed nesciunt suscipit facere fuga veniam accusantium vel natus? Excepturi quasi in, expedita magnam quidem fugiat sint cumque accusamus ratione vero?
        Unde voluptatum nulla dolor perspiciatis at recusandae sunt tempore dolorem, repudiandae similique qui vitae aspernatur obcaecati earum nostrum reprehenderit quis aliquam, suscipit fuga, ut animi delectus labore debitis dignissimos. Doloremque!
        Tenetur ipsam perferendis minima assumenda aut, similique, autem, error ipsa aliquid ad iste? Minima corporis iure provident magni unde, explicabo vel rerum velit maiores quis dignissimos quidem earum maxime molestiae!
        Voluptas eum aut voluptate quibusdam aperiam. Nulla possimus dolores aspernatur, nemo et recusandae debitis modi ullam rem, in soluta sint dolorum quod doloremque voluptatum aliquam nostrum tempore quas repellat dolor!
        Ducimus quos, hic iusto neque maxime officiis tempora, quod, obcaecati pariatur quia molestias nisi. Sint, temporibus non corrupti delectus necessitatibus tempora totam autem tempore impedit soluta vitae. Iusto, error. Quae!
        Voluptatum neque architecto, atque minima odit cumque tempore. Placeat illo sunt ipsam molestias non laborum, ratione beatae voluptate commodi cum, eius, quisquam corporis suscipit. Adipisci non dignissimos quisquam itaque exercitationem.
        Fuga explicabo quaerat quos eius illo quo asperiores dignissimos error ullam. Quibusdam molestias similique accusamus eum, aspernatur cum numquam. Totam ab accusantium in aspernatur quasi unde laudantium, omnis enim quas?
        Sed enim quaerat error deleniti, ducimus velit illo, aut natus ipsa cupiditate odio vero placeat dolore, voluptas nam fuga explicabo. Sequi reiciendis excepturi ad placeat amet, consectetur corporis impedit blanditiis.
        Praesentium, vel, esse nulla nihil impedit perspiciatis deserunt excepturi quas dolorum animi neque nesciunt, at sequi maiores? Quos iusto, quis, qui reiciendis autem id culpa eos distinctio quia nisi officiis!
        Eveniet, eum illum obcaecati tempore doloremque laborum laudantium sunt maiores! Iure voluptatibus ipsa molestiae tenetur expedita rerum, eveniet vitae omnis nihil quam quasi a aliquam tempore? Deleniti voluptate dolore ratione.
        Reprehenderit ducimus numquam praesentium rem? Officia accusamus dolor accusantium odit vero. Animi consequatur magnam molestias praesentium in ad iusto quo, maxime asperiores cupiditate rerum minima? Hic nisi impedit esse ea!
        Eveniet dolor dolorem explicabo doloremque vel ut eligendi. Error assumenda harum est odio pariatur dolore, odit beatae ipsa, quod eaque saepe sint ex officia deserunt dolores suscipit perferendis sed quam.
        Enim placeat quas odio beatae iste labore facere sequi. Eligendi, facere. Quae consequuntur ex assumenda voluptatum doloremque eligendi, corrupti unde animi, dicta sequi ipsam aspernatur? Dol
        Ex necessitatibus quo velit, fugiat nostrum omnis. Perferendis, dolor corporis in perspiciatis praesentium magnam maiores ex quasi culpa vitae amet eos. Molestias ut natus, quis consequatur voluptatibus nulla mollitia porro.
        Praesentium accusantium nihil, illum ducimus laborum voluptatum esse eveniet culpa tempore corporis magni illo non repellat quod, eius omnis assumenda molestiae perferendis repellendus error autem voluptas ratione obcaecati at. Velit!
        Natus similique animi praesentium mollitia. Corporis, accusantium reprehenderit quia fugiat fugit quam alias unde enim necessitatibus! Architecto ab ducimus debitis dolorum, voluptas impedit dicta fugiat incidunt odio vel, fuga dignissimos!
        Architecto quo ut tempore repellendus quos, et, corporis dolorum ipsum alias iusto unde veritatis? Explicabo a omnis accusamus pariatur. Nam pariatur eius rerum quis veritatis vero error, perferendis deleniti accusantium!
        Reiciendis voluptates perspiciatis ipsam architecto corporis, cum repudiandae ratione, fugit, officia inventore numquam? Dolore et optio ducimus facere dignissimos! Reprehenderit, omnis. Repellat recusandae in, dolores officia dolor consectetur ipsa dignissimos.
        Voluptate nam, numquam eaque quis necessitatibus a hic cumque exercitationem inventore dicta iste accusantium, deleniti ab consequatur voluptatem itaque assumenda non quidem repellendus. Totam reiciendis eveniet doloremque cupiditate ducimus incidunt?
        Illum rerum, voluptatibus molestiae soluta et totam doloremque libero dicta architecto quas doloribus incidunt quaerat. Exercitationem, dolorem ullam. Reprehenderit consequuntur architecto quaerat eaque ullam et consequatur corporis quisquam sapiente earum.
        Doloribus dicta quod doloremque reiciendis, voluptatum quasi alias placeat dolores quas. Mollitia laboriosam quaerat voluptatum id eaque officia voluptatibus placeat illo. Consectetur minus sunt eligendi, quos vel a dolor consequatur!
        Iure cum illum nemo, non deserunt explicabo eaque excepturi praesentium dolores obcaecati pariatur ipsum soluta accusantium, perferendis aut et doloremque quas beatae sed quae dolorem! Et nihil provident cupiditate iste.
        Repudiandae ea, dolores nesciunt aperiam odio tempore vel. Vero soluta, illum, tempore distinctio necessitatibus pariatur est ad amet vel reiciendis numquam ab dolore, molestiae at reprehenderit dicta exercitationem quaerat voluptatem?
        Error libero iste modi eaque explicabo voluptates autem, labore mollitia ratione corporis nostrum molestiae rem voluptatibus excepturi rerum fuga, tempore nam ipsam totam odio laboriosam exercitationem nesciunt! Nostrum, recusandae obcaecati!
        Consequuntur delectus harum illo, sed praesentium culpa explicabo obcaecati amet accusamus aut qui dicta sit optio libero blanditiis distinctio labore voluptates, quod ex quia nisi? Vel voluptate aut adipisci velit.
        Esse excepturi quam placeat asperiores laborum eum dicta doloremque cumque temporibus. Quam totam saepe, recusandae similique dolor velit deserunt obcaecati quia debitis quo optio accusamus facere enim iste commodi eius?
        Laboriosam eligendi explicabo facere beatae autem? Vitae fugit odit voluptatum quidem, sapiente, reiciendis est ratione aspernatur exercitationem beatae neque? Voluptatum eligendi similique earum molestiae, nisi ab quas facilis at enim.
        Itaque, quas? Quisquam doloremque, ratione voluptatibus reprehenderit fugiat est blanditiis culpa doloribus excepturi delectus praesentium quidem temporibus rem, voluptatem incidunt. Omnis illo molestiae culpa nulla minima iusto doloribus expedita cumque.
        Quas quod beatae iste ipsa iure ex in dolorem nemo, fugit voluptate? Eius quia corrupti ad optio modi reprehenderit, deserunt magnam et illo, quisquam tempora, minus consequatur totam laudantium dolorum.
        Sit quas perspiciatis illo laudantium quam animi beatae molestiae distinctio ea numquam perferendis eum voluptate fugiat voluptatem nihil amet, voluptatibus iure dicta. Quibusdam architecto, nobis mollitia voluptas quia laborum ipsam?
        Molestiae, voluptates ducimus minima in fuga necessitatibus porro cumque est, velit accusantium maxime officia. Cupiditate commodi iure quia culpa? Unde incidunt alias nisi reiciendis maxime provident iure veritatis doloribus nihil!
        Pariatur, minima sequi repudiandae ex tempora eum illum officiis itaque ab porro nulla illo nobis hic voluptatem perferendis eius doloribus assumenda cum ad ullam! Unde voluptatibus a odio aut dicta.
        Molestiae nesciunt libero doloremque atque deleniti, maiores optio esse delectus, dolorum laudantium itaque ullam ducimus aliquid, similique a hic commodi unde enim est? Vero dolorum accusamus dolor eum similique dolore?
        Atque aspernatur minima, fugiat repellendus nobis voluptas reiciendis dignissimos eligendi fuga suscipit totam consectetur dolor dolorem asperiores repudiandae tenetur ipsa doloremque. Id dolorem laudantium aliquid, hic laboriosam omnis consectetur eos.
        Quos libero ipsa, maxime quidem soluta, architecto mollitia rem, accusamus cumque adipisci pariatur magni? Voluptatem ut similique consectetur tempora, voluptas fugiat culpa, eligendi dolor, nesciunt et autem necessitatibus repellat. At?
        Accusantium, quisquam vel. Quod explicabo accusantium, molestias amet animi, ea eius a libero tempora atque ad deserunt corrupti recusandae nam corporis consequuntur cum quae voluptatem pariatur veritatis. Inventore, rem dolorem?
        Expedita sed ipsa totam labore, quos nam quibusdam excepturi molestias, dolorem sunt ex fugit qui delectus, iste dolor optio voluptate dolores natus laudantium tenetur eligendi error deserunt officia sapiente. Recusandae.
        Reiciendis dolorem necessitatibus officiis dolores nihil porro asperiores officia provident ducimus esse hic culpa exercitationem totam, itaque ipsum aperiam sequi accusamus vitae dolore quasi facilis animi? Deserunt cupiditate vero corrupti!
        Quas ipsam voluptates alias, cumque exercitationem aliquid in numquam delectus corporis deserunt ritatis animi reprehenderit quae architecto minus eius praesentium adipisci eum dolor exercitationem quas, totam mollitia quisquam sed reiciendis dignissimos voluptas accusamus quo error asperiores. Harum, ea.
        At cumque hic aperiam, quod repellendus voluptatum iure esse necessitatibus nam eos vero corporis harum impedit architecto minus nisi suscipit iste ducimus. Doloremque quisquam culpa tempora exercitationem eius soluta cupiditate!
        Sed enim blanditiis dignissimos odio, rem dolorum optio delectus quae ipsa et sapiente alias eaque beatae inventore qui dolorem eveniet quo fugit veniam accusantium repellendus nobis consequatur! Dolore, magni sunt.
        Delectus pariatur ipsa, in voluptatibus eveniet ut assumenda debitis ad cum perspiciatis non perferendis autem enim fugit? Corporis dolorem natus repellendus, doloribus perspiciatis officia eos nulla distinctio doloremque a veritatis?
        Nobis totam tenetur, voluptatibus facere dolorem eligendi. Dolore, quo neque. Vero quod debitis, saepe quasi odio laudantium cupiditate commodi ea a aliquam, quam assumenda perspiciatis repudiandae excepturi ipsam mollitia ab.
        Itaque porro, eius ea aliquam eos impedit corrupti dicta consequatur. Ratione quod voluptas eveniet fugit consectetur eaque. Similique architecto aperiam, temporibus, labore cupiditate omnis ea quisquam ut itaque nam laudantium!
        Maxime culpa minus mollitia temporibus, quia asperiores voluptatem nemo, nesciunt, quod nam ipsa impedit iusto laborum doloremque voluptates fugiat rem rerum iste numquam tempore quas similique nostrum dolorum. Cupiditate, perferendis.
        Iste quaerat dolorum provident aspernatur maiores debitis, ducimus illum magni! Ipsam quae sapiente esse. Ipsa ab, laboriosam dolores officiis fugiat rem ratione animi. Neque enim ullam, laudantium fuga consequuntur explicabo.
        Alias magni quis vel. Eum, dolor tempore! Excepturi nam alias ex veritatis facere aut, voluptate molestiae eligendi, deserunt architecto quibusdam iste iure! Facilis consequatur ut maxime nam voluptatum eaque quas.
        Tenetur rerum unde optio perferendis illo facilis iste. Neque beatae doloremque quisquam possimus magnam corporis illum, quibusdam ad et! Ullam, molestiae officiis. Sapiente, voluptatem. Maxime est minima aut facere itaque!
        Accusamus suscipit veritatis, aliquam, enim reiciendis architecto dicta maxime a, qui tempora magnam? Laborum architecto vel error tempore distinctio cum officia excepturi dolore, asperiores, hic illum repellendus impedit perspiciatis. Eos!
        Illum, asperiores ipsa, porro velit dolor id eligendi nisi numquam expedita incidunt est quae alias? Recusandae asperiores excepturi architecto, quae sequi sint tempore fugit eum similique, magni rerum, adipisci sapiente.
        Atque dignissimos incidunt eligendi reprehenderit laudantium unde a officia quasi odit voluptatibus suscipit temporibus porro, hic consequuntur dolor repudiandae nisi, numquam assumenda non distinctio nulla? Delectus autem quia iure qui.
        Odio et quisquam nesciunt. Magni deleniti quidem vitae nisi repellendus vero voluptate fuga repudiandae nulla minima molestias quos nesciunt nihil praesentium inventore quam laudantium, vel, hic molestiae maxime rem quis!
        Accusantium tenetur eos reprehenderit est perferendis, unde sapiente iste explicabo quod facilis eius mollitia necessitatibus odit temporibus quam harum, fugit error accusamus? Voluptate, enim eos saepe quaerat voluptatem non esse?
        Omnis quis, ea quasi quas, ut neque incidunt recusandae illo tempora, odio officia cum repellat voluptatum qui. Totam esse, vitae dolore consequuntur deleniti ex iste alias! Libero autem quos eos.
        Adipisci eligendi minus quisquam! Velit atque necessitatibus est illo blanditiis, possimus ea quas, totam odit, suscipit dolore doloremque dolores. Voluptatum repudiandae ipsa modi! Rerum perferendis quisquam deserunt beatae, facilis porro.
        Ab ullam cupiditate nobis ea asperiores dicta sint, perferendis excepturi ipsam nulla sequi quidem dignissimos perspiciatis doloremque tenetur iste repellat sed maiores itaque magni molestiae eligendi quae. Vitae, nobis odio.
        Perspiciatis totam beatae est, enim perferendis earum laboriosam dicta excepturi, quia quas at voluptatibus ab quaerat. Eveniet quasi, fuga sed esse tempore voluptatibus earum voluptates ut possimus nobis quis veniam.
        Incidunt deleniti nostrum numquam beatae eum, tempora dolorum id odio mollitia architecto velit nemo fuga commodi et, ullam a porro delectus itaque. Magnam, voluptate laudantium dolore quas delectus eaque in.
        Culpa debitis velit aperiam eum quos! Accusantium doloribus tempore ducimus reiciendis id aperiam dolores voluptatibus molestias magnam. Cupiditate, dolorum tempora enim fugit ut debitis quas? Eligendi ad quam dolorem veniam.
        Corporis maiores voluptates eum nulla consectetur suscipit vel tenetur earum ex accusamus animi laboriosam adipisci sed laudantium temporibus aliquid ipsam rem, dolores, vitae, nesciunt debitis odio distinctio. Consequatur, assumenda nihil.
        Velit explicabo dignissimos soluta omnis error molestiae quae, laboriosam eum sapiente repellendus consequuntur aliquam dolor quod delectus ullam dicta officiis quaerat? Cumque officiis nam beatae laboriosam dolore voluptates praesentium ut.
        Eligendi, asperiores sit incidunt suscipit error voluptatum sunt. Dolore ipsa ut id molestiae explicabo pariatur officia laborum? Vero numquam temporibus ea, suscipit quia quam nesciunt incidunt deleniti omnis aliquid similique.
        Numquam nemo autem quaerat recusandae dignissimos totam blanditiis unde ab laudantium dolor, sed dolorum dolore, excepturi eveniet. Deleniti qui perferendis quisquam! Commodi modi atque amet nostrum similique asperiores ipsa adipisci!
        Sint quidem magnam nobis repudiandae quibusdam culpa sapiente asperiores cum consectetur odit quo veniam modi quis, facere mollitia saepe nisi esse? Laudantium cumque, laborum dolores error quidem ipsa magni ea!
        Neque aperiam doloribus blanditiis culpa ipsum! Dolorem necessitatibus officiis at optio ullam facilis ipsa molestiae sint deserunt autem temporibus, vero inventore pariatur quam doloremque excepturi nisi voluptatum atque quisquam? Voluptates?
        Nulla obcaecati, totam maiores, sit excepturi magni inventore, libero a cumque magnam saepe laudantium. Perferendis tempora optio recusandae tenetur. Ut alias quo nisi earum aliquid, corporis facere iusto error provident!
        Optio officia ratione rem laboriosam earum voluptate odit, autem libero ipsum perspiciatis necessitatibus, quas quibusdam expedita, eaque voluptas. A dicta fuga consequatur quas molestiae, tenetur ad cum exercitationem aliquam odio!
        At voluptatibus impedit ea fugit ducimus sequi temporibus excepturi molestias illum voluptate qui quod beatae facere non similique natus vitae, quam reiciendis perspiciatis nisi dolores mollitia totam id? Neque, quisquam!
        Harum perspiciatis dolorem optio reiciendis quos amet, impedit tempore sequi voluptatem ducimus esse porro corrupti maxime quas similique laborum, eos dolore quidem. Fuga reprehenderit expedita ipsam autem, nam sequi temporibus.
        Eos, facilis ullam laboriosam cum, aliquam optio voluptates consequuntur assumenda, at hic suscipit sed eius dicta praesentium quo ab omnis quos eligendi doloremque qui nostrum? Excepturi aut et cupiditate amet?
        Perferendis amet repellat magnam vero. Cumque fugit necessitatibus labore provident modi? Quasi incidunt quia officiis vel laborum alias aperiam eligendi reprehenderit in, impedit eum libero, pariatur corrupti delectus commodi! Sint?
        Dolorum qui laboriosam dolorem facere tenetur consequuntur repellat, aliquid soluta reiciendis ea cumque et id voluptas commodi voluptatem nam, est quis nemo necessitatibus voluptate odio. Eligendi fuga explicabo inventore nemo.
        Dolorem asperiores distinctio, a illo eos, hic repellendus non in mollitia et provident accusamus aliquid veniam quos, porro pariatur vero magni ad consequuntur. Qui reiciendis aliquid eligendi. Necessitatibus, tempore nesciunt.
        Rerum, magni. Deleniti, sed deserunt? Officia harum qui id quis accusantium eligendi tempore, inventore consequuntur aspernatur, ipsum repellat accusamus nulla magni eius veritatis reprehenderit quam perferendis sed modi voluptates. Voluptatem!
        Autem maxime ea quis. Laudantium voluptates explicabo doloremque eaque quas cupiditate odio reprehenderit, ipsam perferendis molestiae nostrum libero atque magnam deserunt voluptate hic ducimu
        Delectus officiis magnam corrupti ea omnis commodi? Exercitationem nisi vero quos ad voluptates fugit quas at temporibus distinctio natus iusto sit nulla quae numquam dicta, vitae eveniet voluptas error mollitia.
        Laudantium dolor maxime voluptatibus itaque quis fugiat voluptatum quasi impedit. Voluptatem, laboriosam. Nisi eum rerum laudantium nulla, laboriosam, illum itaque similique in tempora, quam et iste cupiditate hic obcaecati cum?
        Fuga, assumenda vitae, reprehenderit sed cum sunt fugiat voluptatem dignissimos maxime doloribus veritatis fugit recusandae iure odit nesciunt. Ea saepe repellendus quas nobis deserunt nesciunt vero adipisci placeat, accusantium magnam.
        Est iusto obcaecati, amet temporibus asperiores eligendi nesciunt unde commodi rem enim nisi pariatur quas, accusantium minima facilis fuga a eaque possimus repudiandae nostrum et nam laborum facere tempore? Necessitatibus.
        Vero error eveniet optio iusto molestiae neque, accusamus nisi cumque atque officia, veniam a quas temporibus ipsa porro dolorum delectus id incidunt accusantium pariatur et. Corporis dolorum vero rem perspiciatis?
        At ipsum harum unde sapiente eligendi beatae molestias, eaque excepturi magnam consectetur deleniti quia distinctio deserunt optio dolorem corrupti officia sunt tenetur voluptatibus ullam, dolor saepe, incidunt illo maxime. Maiores?
        Autem recusandae quisquam minima doloribus obcaecati alias dicta fuga modi delectus. Ab ipsa numquam blanditiis ad voluptates ex eaque sit iure, aperiam provident officiis, impedit dolor placeat ullam a cupiditate.
        Ipsum optio officia a doloribus illo culpa suscipit aliquid debitis porro cum vel harum repellendus natus velit provident eligendi, ea totam blanditiis? Non consectetur rerum suscipit dolorem dolore, quod neque.
        Excepturi placeat libero dolore odit ipsam quas iure ipsum sunt. Eos ipsa et suscipit esse totam magni ad, voluptas corrupti repellat fuga architecto nemo enim voluptate harum. Sequi, sint suscipit?
        Nulla quidem sint eligendi accusantium nemo dolorum quasi quod ad. Animi recusandae eius repudiandae optio tempora sequi, quos error tempore quo expedita, consequatur deserunt iusto accusantium, nobis voluptatum ullam nemo?
        Aperiam minus quaerat debitis suscipit, veniam temporibus natus in sed necessitatibus exercitationem porro excepturi voluptates accusamus reiciendis architecto ratione eligendi libero velit, nobis soluta. Nam similique rem odio ut aliquam?
        Cum dignissimos aperiam autem harum commodi vitae repellendus consectetur minus ipsa in, praesentium magnam fugit consequatur quod rerum aliquam, accusamus quasi tempore. Reiciendis quo placeat rem soluta aperiam laudantium quidem!
        Soluta, quas eum? Quod commodi voluptatum eveniet amet quis repellendus deleniti nisi fugit odit ipsam unde sunt dolor suscipit neque accusantium illo, in qui dolorum. Veritatis aut inventore officiis omnis!
        Quo veniam, harum modi, autem temporibus dicta doloribus similique sit sunt ea excepturi sed quas placeat sapiente! Consectetur pariatur dignissimos ratione aliquam facere. Nam magni repellendus deleniti magnam odit earum?
        Aut omnis ullam iste corrupti molestiae natus laboriosam, esse itaque reprehenderit? Dignissimos voluptatem maiores delectus dolorum natus dicta, sunt facere quos alias inventore veritatis culpa, sapiente, incidunt accusamus nostrum consectetur!
        Doloremque tenetur libero sapiente sed perferendis, quos inventore rem quibusdam, unde repellendus nulla recusandae optio, itaque soluta enim accusantium deserunt eos ipsum quisquam ducimus. Tempora error libero ut iusto temporibus.
        Provident, ipsum. Iste mollitia natus doloribus illum vero impedit ipsa amet eveniet id nemo soluta itaque dolores in distinctio ex dicta provident, omnis laboriosam excepturi repellendus maiores? Excepturi, suscipit quas.
        Pariatur assumenda aperiam dignissimos eum, fuga, ipsum, et velit eligendi perspiciatis sunt laudantium facilis minima porro commodi mollitia provident animi cumque. Numquam sed repellat alias veritatis esse ratione aspernatur distinctio.
        Nemo suscipit impedit ratione eum magnam. Consequuntur veniam dignissimos quibusdam deserunt, quasi totam necessitatibus ipsa voluptatem aliquid, voluptatum officia est, asperiores debitis autem quis! Natus illo ab quaerat culpa non.
        Illum velit rerum odio assumenda? Harum dignissimos sint quidem, unde cupiditate ullam quibusdam laborum ab quos, error incidunt quo corrupti ea ipsam itaque cum a eveniet quis ratione, possimus at.
        Maxime distinctio debitis eum, itaque nam odio possimus illum? Esse laborum odio, tenetur doloremque dolore laboriosam veritatis voluptate eos quisquam ducimus, doloribus commodi labore consequatur laudantium ab ipsum quos? Non.
        Illo facilis, expedita tempore amet architecto aperiam deserunt blanditiis quibusdam, magnam rem sequi corrupti, nostrum fuga labore aliquam veniam earum minus? Exercitationem molestiae quo quidem temporibus illum iure minima adipisci.
        Rerum voluptates ipsum consequuntur cupiditate at, ad dolores laborum sunt sequi iste repellendus et dignissimos possimus nihil porro voluptatibus. Quaerat rem itaque iure? Nisi fugit id possimus dicta ipsa voluptates.
        Illo nobis libero dicta magni quod explicabo commodi, ipsum necessitatibus quaerat! Unde illum eius, assumenda non esse reprehenderit dignissimos. Delectus voluptatibus illo earum officia sed nulla repellat provident hic temporibus.
        Error unde porro rem cumque reprehenderit, vitae recusandae? Ullam provident perferendis itaque tenetur perspiciatis. Aperiam expedita qui, doloribus nobis voluptatibus inventore et aliquid cupiditate praesentium perspiciatis ea fugiat similique atque.
        Ea cum corporis modi. Architecto optio, pariatur quos praesentium repudiandae veniam dolorum placeat! Veritatis id dolorem, quasi tempora natus unde magni blanditiis fugit quis corrupti magnam quibusdam. Eaque, ea hic.
        Alias maiores accusamus ipsa, recusandae minus molestiae voluptate delectus. Obcaecati inventore ex ut quia ratione, soluta nisi itaque! Provident neque tempora aspernatur aliquid possimus eaque quas in impedit ut consequuntur.
        Esse optio doloribus porro fuga deleniti quae ipsa saepe dolorem, natus id pariatur provident illum exercitationem sed quasi minima et corporis omnis amet. Eos beatae fugiat, commodi amet quod ipsam?
        Unde optio assumenda voluptate. Ex at, rerum laudantium quam nostrum quae molestiae quia assumenda dicta expedita cum, maxime eveniet consectetur accusamus? Fugit quas officia optio totam? Saepe aperiam minus accusamus.
        Dicta maxime accusamus doloribus! Accusamus aspernatur neque consequatur veniam voluptatem rem accusantium quasi obcaecati. Magni atque consequuntur, inventore, ea quaerat similique saepe soluta perferendis in unde necessitatibus illo blanditiis? Quo.
        Repellendus reprehenderit distinctio modi porro, earum cumque iusto ipsum suscipit voluptatem quas laudantium inventore consequatur. Dolorem fuga possimus quas ipsum, cupiditate error laboriosam incidunt doloremque repellendus optio officia fugit similique?
        Eligendi maiores modi placeat ex culpa sit repellendus quos iusto quo minima commodi consequuntur enim in, error cumque ad. Aliquam distinctio officiis id nostrum natus expedita perspiciatis labore eligendi adipisci!
        Tempora enim facere ducimus id ut itaque delectus rerum labore iste saepe est libero, ex suscipit dicta perferendis sunt dolore non aspernatur mollitia numquam velit fugit minima totam nostrum. Nostrum!
        Numquam corrupti ea dolor. Numquam ducimus ab aliquam voluptatum doloremque. Obcaecati blanditiis numquam delectus, eius amet odit, excepturi, ipsa vel pariatur voluptas quas ex repellat nulla repudiandae deserunt suscipit! Id?
        Deserunt amet adipisci, distinctio sint rem iste doloribus exercitationem sapiente impedit obcaecati ab facere voluptas, accusantium nihil sed reprehenderit saepe quasi iure? Inventore sed aliquam natus quos laudantium odit nesciunt.
        At totam autem laboriosam molestias officia unde ab itaque harum necessitatibus quae ea ducimus corrupti fugiat nobis reprehenderit repudiandae quibusdam, fugit ipsum facere maiores recusandae velit nesciunt similique quos? Modi.
        Voluptates cupiditate consequuntur animi officia quae placeat aut dolorem laboriosam ratione iusto eius aliquam quidem quos, ex laborum similique nostrum eum nisi numquam quas ipsam. Velit libero veritatis esse ipsa!
        Ducimus commodi voluptatibus eum amet nesciunt iusto quo rem molestias ipsa! Dolorem obcaecati eius reprehenderit totam voluptates natus? Aperiam molestiae ab itaque ad et ipsam dolorem. Magni placeat odio nostrum.
        Molestias, facere! In, repudiandae accusantium! Quod similique neque dolorem voluptatibus? In repellat vel nam eum sunt, recusandae vitae, id mollitia exercitationem cupiditate voluptas cumque nulla debitis illum aliquid temporibus ad!
        Rem voluptas in facilis excepturi, maiores saepe explicabo accusantium, eligendi vitae corrupti obcaecati iste earum nostrum nulla quia cupiditate corporis harum dolore, distinctio non perspiciatis? Nesciunt laborum eum minima consequuntur!
        Corporis tempore, odit doloremque doloribus porro officiis deserunt voluptate tenetur hic nesciunt repudiandae perspiciatis. Voluptatem, consectetur delectus facere corrupti illum excepturi omnis unde beatae, aliquid dolorum possimus recusandae eos a.>
      </p>
    </div>

    <div class="flex justify-center mt-2 gap-4">
      <a href="#" class="hover:scale-125 transition relative group flex flex-col items-center">
        <div class="bg-gray-950 rounded-full size-4 border-red-600 border-2"></div>
        <p class="hidden group-hover:block text-sm font-light text-gray-800 mt-1">Home</p>
      </a>
      <a href="#" class="hover:scale-125 transition relative group flex flex-col items-center">
        <div class="bg-gray-950 rounded-full size-4 border-pink-600 border-2"></div>
        <p class="hidden group-hover:block text-sm font-light text-gray-800 mt-1">About</p>
      </a>
      <a href="#" class="hover:scale-125 transition group relative flex flex-col items-center">
        <div class="bg-gray-950 rounded-full size-4 border-green-600 border-2"></div>
        <p class="hidden group-hover:block text-sm font-light text-gray-800 mt-1">Take admission</p>
      </a>
    </div>
  </div>
</section>

<hr class="text-[2px] text-blue-700 mt-4">
<!-- Importent Notice -->
<div  style="background-image: url('./images/infr2.jpg');width: 100%;background-size: cover; height:auto;background-repeat: no-repeat; background-attachment: fixed; background-position: center center; ">
 <section class="mt-10 shadow-2xs lg:w-3xl lg:mx-auto md:w-2xl md:mx-auto sm:w-1xl sm:mx-auto p-2" >
  
  <h2 class="text-3xl font-bold text-center mb-4 text-red-600 hover:text-red-800">Importent notice</h2>
  
  <style>
    
    
@keyframes scroll-up-slow {
  0%   { transform: translateY(0%); }
  100% { transform: translateY(-50%); }
}

@keyframes scroll-up-fast {
  0%   { transform: translateY(0%); }
  100% { transform: translateY(-50%); }
}

.scroll-slow {
  animation: scroll-up-slow 20s linear infinite;
}

.scroll-fast {
  animation: scroll-up-fast 10s linear infinite;
}

.pause-on-hover:hover {
  animation-play-state: paused;
}
</style>
<!-- Flex Row of Two Notice Boards -->
<div class="flex flex-col lg:flex-row md:flex-row gap-8">
  <!-- Notice Board 1 -->
  <div class="flex flex-col lg:flex-row md:flex-row gap-8">

  <!-- Notice Box 1 - Slower -->
  <div class="h-60 w-80 mx-auto overflow-hidden bg-gray-100 border rounded-lg relative  ">
    <div class="scroll-slow pause-on-hover space-y-2 p-4">
      <p>📢 Notice 1: Welcome to our college!</p><hr>
      <p>📢 Notice 2: Annual sports meet is on 15th August.</p><hr>
      <p>📢 Notice 3: Midterm exams start next Monday.</p><hr>
      <p>📢 Notice 4: Submit your assignments by Friday.</p><hr>
      <p>📢 Notice 5: Campus cleaning drive on Saturday.</p><hr>
      <p>📢 Notice 6: New books available in the library.</p><hr>
      <p>📢 Notice 7: Register for the coding workshop.</p><hr>
      
      <!-- Repeat for infinite effect -->
      <p>📢 Notice 1: Welcome to our college!</p><hr>
      <p>📢 Notice 2: Annual sports meet is on 15th August.</p><hr>
      <p>📢 Notice 3: Midterm exams start next Monday.</p><hr>
      <p>📢 Notice 4: Submit your assignments by Friday.</p><hr>
      <p>📢 Notice 5: Campus cleaning drive on Saturday.</p><hr>
      <p>📢 Notice 6: New books available in the library.</p><hr>
      <p>📢 Notice 7: Register for the coding workshop.</p>
    </div>
  </div>

  <!-- Notice Box 2 - Faster -->
  <div class="h-60 w-80  mx-auto overflow-hidden bg-gray-100 border rounded-lg relative">
    <div class="scroll-fast pause-on-hover space-y-2 p-4">
      <p>📢 Notice A: Admissions are now open.</p><hr>
      <p>📢 Notice B: Attend the orientation on Monday.</p><hr>
      <p>📢 Notice C: Collect your ID cards.</p><hr>
      <p>📢 Notice D: Library membership drive ongoing.</p><hr>
      <p>📢 Notice E: Career counseling this Friday.</p><hr>
      <p>📢 Notice F: PTM scheduled next week.</p><hr>
      <p>📢 Notice G: Cultural fest auditions open.</p><hr>
      
      <!-- Repeat for infinite effect -->
      <p>📢 Notice A: Admissions are now open.</p><hr>
      <p>📢 Notice B: Attend the orientation on Monday.</p><hr>
      <p>📢 Notice C: Collect your ID cards.</p><hr>
      <p>📢 Notice D: Library membership drive ongoing.</p><hr>
      <p>📢 Notice E: Career counseling this Friday.</p><hr>
      <p>📢 Notice F: PTM scheduled next week.</p><hr>
      <p>📢 Notice G: Cultural fest auditions open.</p>
    </div>
  </div>

</div>
</div>
<div>
  <h2 class="text-center text-4xl font-bold text-red-700 hover:text-pink-700 transition-colors">Full Guidelines for Student</h2>
  <div class="flex flex-col lg:flex-row md:flex-row gap-8 ">
  <div class="flex items-center justify-center text-center p-4 bg-gradient-to-br from-blue-300 to-blue-200 rounded-xl shadow-lg hover:scale-105 transform transition duration-300">
    <span class="font-bold text-lg text-gray-800">🎓 Entrance Exams <i class="fa-solid fa-arrow-right"></i></span>
  </div>
  <div class="flex items-center justify-center text-center p-4 bg-gradient-to-br from-blue-300 to-blue-300 rounded-xl shadow-lg hover:scale-105 transform transition duration-300">
    <span class="font-bold text-lg text-gray-800">✅ Selection <i class="fa-solid fa-arrow-right"></i></span>
  </div>
  <div class="flex items-center justify-center text-center p-4 bg-gradient-to-br from-blue-300 to-blue-200 rounded-xl shadow-lg hover:scale-105  transform transition duration-300">
    <span class="font-bold text-lg text-gray-800">💻 Teaching Offline & Online<i class="fa-solid fa-arrow-right"></i></span>
  </div>
  <div class="flex items-center justify-center text-center p-4 bg-gradient-to-br from-blue-300 to-blue-200 rounded-xl shadow-lg hover:scale-105 transform transition duration-300">
    <span class="font-bold text-lg text-gray-800">📝 Exams<i class="fa-solid fa-arrow-right"></i></span>
  </div>
  <div class="flex items-center justify-center text-center p-4 bg-gradient-to-br from-blue-300 to-blue-200 rounded-xl shadow-lg hover:scale-105 transform transition duration-300">
    <span class="font-bold text-lg text-gray-800">📊 Result</span>
  </div>
</div> 

</div>


</section>
</div>
<!-- our courses -->
<section class="mt-10">
  <div>
    <div class="text-center shadow p-4">
    <h2 class="text-2xl font-bold hover:text-pink-700">Our Courses</h2>
    <p class="text-blod hover:text-pink-500">We provided various courses Including:</p>
</div>
    <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6 p-4">
  <!-- ARTS -->
  <div class="shadow p-4 rounded bg-white">
    <h2 class="text-2xl font-bold mb-4 text-blue-700">ARTS</h2>
    <ul class="grid lg:grid-cols-1 sm:grid-cols-2 gap-2">
      <a href=""><li class="border border-gray-600 p-2 bg-blue-100 rounded">History</li></a>
     <a href=""> <li class="border border-gray-600 p-2 bg-blue-100 rounded">Geography</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-blue-100 rounded">Political Science</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-blue-100 rounded">English Core</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-blue-100 rounded">English Elective</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-blue-100 rounded">Hindi Core</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-blue-100 rounded">Hindi Elective</li></a>
    </ul>
  </div>

  <!-- SCIENCE -->
  <div class="shadow p-4 rounded bg-white">
    <h2 class="text-2xl font-bold mb-4 text-green-700">SCIENCE</h2>
    <ul class="grid lg:grid-cols-1 sm:grid-cols-2 gap-2">
      <a href=""><li class="border border-gray-600 p-2 bg-green-200 rounded">Physics</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-green-200 rounded">Chemistry</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-green-200 rounded">Biology</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-green-200 rounded">Maths</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-green-200 rounded">English</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-green-200 rounded">Computer Science</li></a>
    </ul>
  </div>

  <!-- COMMERCE -->
  <div class="shadow p-4 rounded bg-white">
    <h2 class="text-2xl font-bold mb-4 text-yellow-700">COMMERCE</h2>
    <ul class="grid lg:grid-cols-1 sm:grid-cols-2 gap-2">
      <a href=""><li class="border border-gray-600 p-2 bg-yellow-200 rounded">Accountancy</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-yellow-200 rounded">Business Studies</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-yellow-200 rounded">Economics</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-yellow-200 rounded">English</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-yellow-200 rounded">Mathematics</li></a>
      <a href=""><li class="border border-gray-600 p-2 bg-yellow-200 rounded">Entreprenurship studies</li></a>
    </ul>
  </div>
</div>
</div>
  
</section>

<!-- section of reviews from our students -->
<section style="background-image:url('./images/infr2.jpg'); background-size: cover; background-repeat: no-repeat; background-attachment: fixed;" class="py-10 relative">
  <div class="text-center mb-8">
    <h2 class="text-4xl font-bold text-yellow-700 hover:text-pink-700">Reviews from Our Students</h2>
  </div>

  <div class="overflow-hidden relative max-w-7xl mx-auto">
    <div id="carousel" class="grid grid-cols-3 gap-8 transition-transform duration-700 ease-in-out">
      <!-- Review 1 -->
      <div class=" flex-shrink-0 bg-white p-6 rounded-xl shadow-lg text-center transform scale-95 opacity-70 transition-all duration-500">
        <h2 class="text-2xl font-bold text-blue-700 mb-2">Riya Mandal</h2>
        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi exercitationem animi omnis hic corrupti, fugiat totam eum pariatur dolorem illo doloribus eos.</p>
      </div>

      <!-- Review 2 -->
      <div class=" flex-shrink-0 bg-white p-6 rounded-xl shadow-xl text-center transform scale-110 opacity-100 z-10 transition-all duration-500">
        <h2 class="text-2xl font-bold text-green-700 mb-2">Sanu Chakraborty</h2>
        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit laudantium hic asperiores similique sapiente ex ea consequatur inventore quia reiciendis dolore.</p>
      </div>

      <!-- Review 3 -->
      <div class="flex-shrink-0 bg-white p-6 rounded-xl shadow-lg text-center transform scale-95 opacity-70 transition-all duration-500">
        <h2 class="text-2xl font-bold text-yellow-700 mb-2">Sunita Mahato</h2>
        <p class="text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti odio dignissimos tenetur suscipit eum? Culpa quasi quas non? Unde voluptatum dicta perferendis.</p>
      </div>
    </div>
  </div>
</section>


<hr>
<hr>


<?php
include("ImpLinks.php");
 include("footer.php")
 
?>