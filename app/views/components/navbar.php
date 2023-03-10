<nav id="nav" class="flex items-center z-50 p-2 justify-between bg-[#8cd0e3] text-white top-0 ">
    <div class="w-10 h-10 grid place-items-center">
      <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
      </svg> -->
    </div>


    <div class="mx-auto">
    <a href="<?=ROOT?>home">
        <div class="flex flex-col justify-center items-center">
          <h1 class="text-4xl font-medium relative font-secular my-1">GlowGuru <span
              class="text-sm absolute top-1">&copy</span></h1>
        </div>
        </a>
      <hr class="shadow-xl">

      <ul class="flex justify-between font-medium text-xl">
        <?php foreach ($categories as $value) { ?>
          <li class="p-2"><a href="<?=ROOT?>home/cat/<?=$value['id']?>"><?=$value['nom']?></a></li>
          
        <?php }; ?>
       

      </ul>
    </div>
    <a href="<?=ROOT?>login">
    <div class="w-10 h-10 grid place-items-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round"
          d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
      </svg>
    </div>
  </a>
  </nav>