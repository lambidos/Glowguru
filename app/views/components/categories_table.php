<div id="dashboard_view" class="border-2 border-[#5ec8e6]  overflow-y-scroll my-4 p-5 w-full">
        <div class="flex  flex-col  items-center ">
          <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-white tracking-wider uppercase bg-[#8cd0e3] ">
              <tr class="">
                <th scope="col" class="px-6 py-3">
                  nom categorie
                </th>
                <th scope="col" class="px-6 py-3">
                  description
                </th>
                <th scope="col" class="px-6 py-3">
                  actions
                </th>
                
              </tr>
            </thead>
            <tbody>
              <?php if(!empty($data))foreach ($data as $value) { ?>
               
              
              <tr class="bg-white border-b border-[#8cd0e3] hover:bg-[#e3fafa] transition-all">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                  <?=$value['nom'];?>
                </th>
                <td class="px-6 py-4">
                  <textarea class="border w-full p-1" name="" id="" ><?=$value['description'];?></textarea>
                </td>
                
                <td class="flex justify-around mt-2">
                  <a href="" class="w-8 h-8 p-1 bg-white text-[#5ec8e6] hover:text-[#479ab0] ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                    </svg>
                    
                  </a>
                  <a href="<?=ROOT?>category/edit/<?=$value["id"];?>" class="w-8 h-8 p-1 bg-white text-[#5ec8e6] hover:text-[#479ab0] ">
                    <svg class="" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                      <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>
                    
                  </a>
                  <a href="<?=ROOT?>category/delete/<?=$value['id'];?>" class="w-8 h-8 p-1 bg-white text-[#5ec8e6] hover:text-[#479ab0] ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    
                  </a>
                </td>
              </tr>
              <?php }; ?>
            </tbody>
          </table>
        </div>
      </div>