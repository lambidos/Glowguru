<div id="dashboard_view" class="border-2 border-[#5ec8e6]  overflow-y-scroll my-4 p-5 w-full">
  <div class="flex  flex-col  items-center ">
    <table class="min-w-full border-collapse block md:table">
      <thead class="block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Name</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">User Name</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Email Address</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Mobile</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Mobile</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Mobile</th>
          <th class="bg-[#5ec8e6] p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
        </tr>
      </thead>
      <!-- search -->
      <tr class="bg-white border border-[#5ec8e6] md:border-none block md:table-row">
        <td class="p-2 md:border md:border-[#5ec8e6] text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold"></span>recherche :</td>
        <td class="p-2 md:border md:border-[#5ec8e6] text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Name</span>
          <input id="nom" placeholder="nom du produit" type="text">
        </td>
        <td class="p-2 md:border md:border-[#5ec8e6] text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">User Name</span>
          <input id="description" placeholder="descritpion" type="text">
        </td>
        <td class="p-2 md:border md:border-[#5ec8e6] text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email Address</span>
          <input id="categoriename" placeholder="categorie" type="text">
        </td>
        <td class="p-2 md:border md:border-[#5ec8e6] text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>
          <div class="flex items-center">
            <input id="quantite" class="shadow-sm rounded p-2 mr-2 w-32" placeholder="Quantite" type="text">
            <div class="relative">
              <input type="radio" id="greater_quanttite" name="quantite" value=">" class="hidden">
              <label for="greater_quanttite" class="cursor-pointer select-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

              </label>
              <input type="radio" id="inferior_quanttite" name="quantite" value="<" class="hidden">
              <label for="inferior_quanttite" class="cursor-pointer select-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

              </label>
            </div>
          </div>
        </td>
        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>
          <div class="flex items-center">
            <input id="prix_vente" class="shadow-sm rounded p-2 mr-2 w-32" placeholder="prix vente" type="text">
            <div class="relative">
              <input type="radio" id="greater_prix_vente" name="prix_vente" value=">" class="hidden">
              <label for="greater_prix_vente" class="cursor-pointer select-none">
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>

              </label>
              <input type="radio" id="inferior_prix_vente" name="prix_vente" value="<" class="hidden">
              <label for="inferior_prix_vente" class="cursor-pointer select-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>

              </label>
            </div>
          </div>
        </td>
        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Mobile</span>
          
        </td>

      </tr>
      <!--  -->
      <tbody id="table_body" class="block md:table-row-group">


      </tbody>
    </table>
  </div>
</div>
<script src="<?= ROOT ?>public/src/fetchProducts.js"></script>