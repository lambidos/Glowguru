<div id="dashboard_view" class="border-2 border-[#5ec8e6]  overflow-y-scroll my-4 p-5 w-full">
        <h1 class="text-[#399ab5] mb-4 capitalize font-extrabold tracking-widest text-3xl">ajout produits:</h1>
        <form action="<?=ROOT?>product/edit/<?=$data['id'];?>" method="post" class=" text-white" enctype="multipart/form-data">
          <div class="bg-[#8cd0e3] relative p-8">
            <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
            <div class="flex flex-col xl:flex-row gap-8">
              <div class="flex flex-col gap-3 xl:w-1/2">
                <div class="flex justify-between">
                  <label for="nom">Nom du produit :</label>
                  <input class="text-black w-1/2" value="<?=$data['nom'];?>" name="nom" type="text">
                </div>
                <div class="flex justify-between">
                  <label for="prix_achat">Prix achat:</label>
                  <input class="text-black w-1/2" value="<?=$data['prix_achat'];?>" name="prix_achat" type="text">
                </div>
                <div class="flex justify-between">
                  <label for="prix_vente">Prix vente:</label>
                  <input class="text-black w-1/2" value="<?=$data['prix_vente'];?>" name="prix_vente" type="text">
                </div>
                <div class="flex justify-between">
                  <label for="quantite">quantite:</label>
                  <input class="text-black w-1/2" value="<?=$data['quantite'];?>" name="quantite" type="text">
                </div>
                <div class="flex justify-between">
                  <label for="categorie_id">categorie :</label>
                  <select class="w-1/2 text-black" name="categorie_id" id="">
                    <?php foreach ($data['categories'] as $value) {?>
                      <option <?php if($value['id']===$data['categorie_id'])echo 'selected'; ?> value="<?=$value['id'];?>"><?=$value['nom'];?></option>
                    <?php };?>
                    
                  </select>
                </div>
              </div>
              <div class="flex flex-col gap-3 xl:w-1/2">
                <div class="flex">
                  <label class="w-40" for="description">description :</label>
                  <textarea class="w-full h-16 text-black" name="description" id="" rows=""><?=$data['description'];?></textarea>
                </div>
                <input class="mt-3 ml-auto" type="file" name="photos[]" multiple id="">
              </div>
            </div>

          </div>
          <div class="mt-3">
            
            <button
              class="bg-[#8cd0e3] hover:bg-[#399ab5] transition-all duration-500 relative py-2 px-4 capitalize font-bold tracking-widest"
              id="encore">
              <div class="absolute w-full h-full -top-1 -left-1 bg-[#5ec8e6] -z-10"></div>
              submit
            </button>

          </div>
        </form>
      </div>