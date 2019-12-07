function RECIPES()
{
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/Soups.jpg')\" onclick=\"soups()\"><div class=\"he1\"><h2 style=\"margin: 0px;color: white\">SOUPS</h2></div></div><div class=\"di\" style=\" background: url('images/Snacks.jpg')\" onclick=\"snacks()\"><div class=\"he1\"><h2 style=\"margin: 0px;color: white\">Snacks</h2></div></div><div class=\"di\" style=\" background: url('images/salad.jpg')\" onclick=\"salad()\"><div class=\"he1\"><h2 style=\"margin: 0px;color: white\">Salad</h2></div></div><div class=\"di\" style=\" background: url('images/desserts.jpg')\" onclick=\"dessert()\"><div class=\"he1\"><h2 style=\"margin: 0px;color: white\">Desserts</h2></div></div>";
 }
 function Cuisine()
 {
  document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/continental.jpg')\" onclick=\"continental()\"><div class=\"he1\"> <h2 style=\"margin: 0px;color: white\">Continental</h2></div></div> <div class=\"di\" style=\" background: url('images/indian.jpg')\" onclick=\"indian()\"><div class=\"he1\"> <h2 style=\"margin: 0px;color: white\">Indian</h2></div></div> <div class=\"di\" style=\" background: url('images/Chinese.jpg')\" onclick=\"Chinese()\"><div class=\"he1\"> <h2 style=\"margin: 0px;color: white\">Chinese</h2></div></div> <div class=\"di\" style=\" background: url('images/mexican.jpg')\" onclick=\"mexican()\"><div class=\"he1\"> <h2 style=\"margin: 0px;color: white\">Mexican</h2></div></div> <div class=\"di\" style=\" background: url('images/russian.jpg')\" onclick=\"russian()\"><div class=\"he1\"> <h2 style=\"margin: 0px;color: white\">Russian</h2></div></div>";
 }

  function continental()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/cottage-cheese-steak_med.jpg')\" onclick=\"c1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Paneer Steak</h3></div></div> <div class=\"di\" style=\" background: url('images/roast-paprika-chicken_med.jpg')\" onclick=\"c2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Roast Paprika Chicken</h3></div></div><div class=\"di\" style=\" background: url('images/chicken-in-red-wine_med.jpg')\" onclick=\"c3()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Stuffed Chicken Breasts</h3></div></div><div class=\"di\" style=\" background: url('images/peppered-pasta-salad_med.jpg')\" onclick=\"c4()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Peppered Pasta Salad</h3></div></div> <div class=\"di\" style=\" background: url('images/vegetable-sizzler_med.jpg')\" onclick=\"c5()\"> <div class=\"he1\"><h3 style=\"margin: 0px;color: white\">Vegetable Sizzler</h3></div></div>";
     }
 function c1()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/cottage-cheese-steak_med.jpg')\" onclick=\"c1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Paneer Steak</h3></div></div> <div id=\"di1\"><u>Paneer Steak</u><br><br> Pan fried cottage cheese patties baked with cheese and tomatoes.<br><br> Recipe Cook Time:25 Minutes</div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>125 gm cottage cheese<br>&nbsp;&nbsp; &nbsp;<br>1/4 tsp salt or to taste<br><br>Half a slice bread soft portion<br><br>1 Tbsp coriander leaves, chopped<br><br>1 tsp green chillies, chopped (optional)<br><br>2 slices cheese <br>&nbsp;&nbsp; &nbsp;<br>1 Tbsp oil <br><br>2 slices tomato <br><br></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div><p class=\"instructions\" style=\"margin-bottom: 30px;\">Mash the paneer. Break the bread into small pieces or grate it.<br><br>Mix well together the paneer, salt, hara dhania, green chillies and bread.<br><br>Form into two round 'patties' and pan fry over high heat with the oil till brown on both sides.<br><br>Place on a baking sheet, cover decoratively with the cheese slices and place the tomato on top and grill till cheese is soft and maybe brown if you so desire. (About 5 minutes)<br><br> </p></div></div>";
 }
 function c2()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/roast-paprika-chicken_med.jpg')\" onclick=\"c2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Roast Paprika Chicken</h3></div></div> <div id=\"di1\"><u>Paprika Roast Chicken</u><br><br> An easy to make five ingredient roasted chicken recipe with paprika and sour cream.<br><br> Recipe Cook Time:2 Hours<br><br>Recipe Servings:5 </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li class=\"ingredient\">1 whole chicken (with skin)<br><br>1/2 cup sour cream<br><br>1/4 th cup butter<br><br>1 tsp paprika<br><br>3-4 Tbsp lemon juice<br><br>Salt, to taste<br></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p style=\"margin-bottom: 30px;\">In a bowl mix butter, paprika, salt and a little lemon juice.<br><br>Rub it over and under the chicken skin. Leave it for about an hour in a roasting tin.<br><br>Bake the chicken at 220 degrees C for 1 hour.<br><br>Baste it from time to time with its juices.<br><br>Remove the chicken from the tin. Mix the residue juices in the roasting tin with the sour cream.<br><br>Pour over the chicken.<br><br>Serve.<br></p></div></div> ";
 }
 function c3()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/chicken-in-red-wine_med.jpg')\" onclick=\"c3()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Stuffed Chicken Breasts</h3></div></div> <div id=\"di1\"><u>Stuffed Chicken Breasts with a Mushroom-Red Wine Sauce</u><br><br> Chicken breasts stuffed with a herby mix and topped with a delicate sauce of red wine and mushrooms.<br><br> Recipe Cook Time:30 min <br><br>Recipe Servings:5 </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li class=\"ingredient\">2 chicken breasts<br><br>Salt and pepper to taste<br><br><b><br>For the stuffing:</b> <br><br>3-4 bread slices, cut into cubes<br><br>1 tsp coriander leaves<br><br>1 tsp mint leaves<br><br>1/2 tsp dried fenugreek leaves (kasoori methi)<br><br>1 tsp chilli powder<br><br>A handful of raisins<br><br>A handful of almonds<br><br><br><b>Mushroom-red wine sauce:</b><br><br>1/2 tsp butter<br><br>2 Tbsp mushrooms, chopped fine<br><br>Salt and pepper to taste<br><br>1 small cup red wine<br><br></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Season the chicken breasts with salt, pepper and keep it aside.<br><br>In the meanwhile, make the stuffing.<br><br>In a bowl mix all the stuffing ingredients.<br><br>Season with salt and pepper.<br><br>Stuff the chicken breasts.<br><br>Now seal the edges of the breasts with a tooth pick so that the filling does not spill out.<br><br>Pan sear the chicken breasts in some olive oil.<br><br>Turn the gas down once it turns brown, cover it and let it cook for another 5-7 minutes.<br><br><br><b>For the sauce:</b><br><br>Heat some butter in a pan. Add to that the mushrooms.<br><br>Season. Add the red wine. Let it simmer and reduce for a couple of minutes.<br><br>Once the chicken is cooked, remove the toothpicks and drizzle the sauce over it.<br></p></div></div>";
 }
function c4()
 {
document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/peppered-pasta-salad_med.jpg')\" onclick=\"c4()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Peppered Pasta Salad</h3></div></div> <div id=\"di1\"><u>Peppered Pasta Salad</u><br><br> A cheesy pasta salad with a tangy dressing. A great crowd pleaser!<br><br> Recipe Cook Time:30 min <br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>1/2 kg boiled pasta <br><br>2 sliced onions <br><br>2 Tbsp green peppercorns <br><br>250 gm halved cherry tomatoes <br><br>100 gm cubed cheese <br><br><b><br>For the dressing:</b><br><br>5 Tbsp oil <br><br>2 Tbsp tomato juice <br><br>3 Tbsp lemon juice <br><br>Grated rind <br><br>1 lime <br><br>1 tsp garlic paste <br><br>3 Tbsp shredded basil <br><br>1 Tbsp shredded mint leaves <br><br>2-3 shredded nasturtium leaves <br><br>Salt and pepper <br><br><b><br>Garnish with:</b><br><br>Bread croutons <br><br>Chopped herbs<br><br></li></ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p class=\"instructions\" style=\"margin-bottom: 30px;\">Combine pasta with remaining salad ingredients. <br><br>Whisk together all the items for the dressing. <br><br>Pour over salad.<br><br>Season again if required.<br><br>Chill and serve garnished with croutons and herbs.</p></div></div>"
 }
 function c5()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/vegetable-sizzler_med.jpg')\" onclick=\"c5()\"> <div class=\"he1\"><h3 style=\"margin: 0px;color: white\">Vegetable Sizzler</h3></div></div> <div id=\"di1\"><u>Vegetable Sizzler</u><br><br> A delightful sizzler recipe. Pan fried potato cutlets topped with lot of veggies, drizzle with a sauce of your choice.<br><br> Recipe Cook Time:30 min <br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>2 cups mixed vegetables ( mushrooms, beans, peas etc) - blanched and chopped <br><br>1 cup potatoes-boiled and mashed <br><br>1 tsp cumin seeds  <br><br>2 tsp ginger-chopped fine <br><br>2 tsp coriander powder  <br><br>2 tsp salt <br><br>2 tsp powdered dry mango  <br><br>2 tsp green chillies-chopped fine   <br><br>1/2 cup refined flour <br><br>1/4 cup oil  <br><br>Sizzler plates</li></ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Heat 2 tbsp of oil and add the cumin and ginger. <br><br>Stir-fry till well mixed and add the mixed vegetables and stir over high heat to dry off the excess moisture.<br><br>Add the coriander powder and the mango powder, salt and chillies, mix well and turn off heat.  <br><br>When cool mix in the potato.<br><br>Form into round or oval cutlets.  <br><br>Dust the cutlets with the refined flour. <br><br>Heat the oil and pan fry to brown on both sides.<br><br><br><br><b>To Serve:<br><br></b>Heat the sizzler plates to very hot; wet the cutlets on both sides and quickly place over the hot plate. <br><br>Sprinkle some more water to increase the sizzling, and serve immediately, accompanied with the sauce of your choice of your choice.</p></div> </div>";
 }
 function indian()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/tawa murg_medium.jpeg')\" onclick=\"i1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Tawa Murg</h3></div></div> <div class=\"di\" style=\" background: url('images/malai-kofta-dum_med.jpg')\" onclick=\"i2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Malai Kofta Dum</h3></div></div> <div class=\"di\" style=\" background: url('images/bombay-toasty_med.jpg')\" onclick=\"i3()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Bombay Toasty</h3></div></div> <div class=\"di\" style=\" background: url('images/Amritsar-murg-makhani_med.jpg')\" onclick=\"i4()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Amritsar Murg Makhani</h3></div></div> </div>";
 }
 function i1()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/tawa murg_medium.jpeg')\" onclick=\"i1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Tawa Murg</h3></div></div> <div id=\"di1\"><u>Tawa Murg</u><br><br> Marinated with the goodness of ginger-garlic, cardamom, cream and curd, chicken legs are cooked, delectably so<br><br> Recipe Cook Time:5 Hrs. <br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>Oil <br><br>2 chicken legs <br><br><br><b>For the 1st Marination</b>:<br><br>1/2 tsp ginger-chopped  <br><br>1/2 tsp garlic-chopped  <br><br>A pinch of cardamom powder  <br><br>1 tsp lemon juice  <br><br>Salt, according to taste    <br><br><br><b>For the 2nd Marination</b>:<br><br>3 tsp fresh cream  <br><br>4 Tbsp hung curd  <br><br>1/2 tsp <i>garam masala</i></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p><b>For the First Marination:<br></b><br>Mix the chicken with the chopped ginger, chopped garlic, cardamom powder, lemon juice and salt and keep it for 3-4 hours. <br><br><br><b>For the Second Marination</b>:<br><br>Now add cream, hung curd and <i>garam masala</i> to the marinated chicken and leave it aside for another 2-3 hours.    <br><br><br><b>For the Main Preparation:</b> <br><br>Heat oil in a <i>kadhai</i>. Add the marinated chicken to it and cook for 8 minutes on a low flame. Serve hot with rice or <i>rotis</i>.</p></div></div> ";
 }
 function i2()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/malai-kofta-dum_med.jpg')\" onclick=\"i2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Malai Kofta Dum</h3></div></div> <div id=\"di1\"><u>Malai Kofta Dum</u><br><br> Succulent meatballs doused in a creamy sauce and baked. This one's sure to be a hit on your party menu.<br><br> Recipe Cook Time:45 Minutes + Time to bake(1/2hr)<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li><b>For the </b><b>meat balls:</b><br><br>2 cups minced meat <br><br>1/2 tsp garlic paste <br><br>1/2 tsp ginger paste <br><br>Salt to taste <br><br>1/4 tsp powdered black pepper <br><br>1/4 tsp <i>garam masala</i> <br><br>Oil for deep-frying   <br><br><b><br>For </b><b>cream sauce:<br></b><br>1 cup <i>malai</i> <br><br>1 cup grated onions <br><br>1/2 tsp <i>garam masala</i> <br><br>2 tsp coriander powder <br><br>Salt to taste <br><br>1/2 tsp chilli powder <br><br>2 Tbsp chopped coriander leaves <br><br>1 tsp finely chopped green chillies <br><br>2 Tbsp chopped coriander leaves for garnish <br><br>An ovenproof dish with a lid, large enough for the <i>koftas</i> to fit comfortably </li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Shape the meat ball mixture into walnut sized rounds, and refrigerate for at least an hour.  <br><br>Heat the oil and put as many meat balls as fit in comfortably; lower heat to complete cooking. Fry all the meat balls this way. <br><br>They will shrink a little and turn a darkish brown. <br><br>In the ovenproof dish, put in a layer of the meatballs and cover with a layer of the cream mixture. <br><br>Repeat till all the meat balls are in the dish.  <br><br>Bake in a pre-heated oven for about half an hour. <br><br>Garnish with the coriander leaves and serve.<br><br><b>NOTE: Oven Temperature is 325 degree F/ 160 degree C.</b></p></div> </div>";
 }
 function i3()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/bombay-toasty_med.jpg')\" onclick=\"i3()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Bombay Toasty</h3></div></div> <div id=\"di1\"><u>Bombay Toasty</u><br><br> A simple and speedy solution for your hunger pangs. Pan fried sandwiches filled with cucumber, tomatoes, onion and potatoes.<br><br> Recipe Cook Time:20 Minutes <br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>4 slices brown bread<br><br>50 gm butter <br><br>1 onion, peeled and sliced <br><br>1 capsicum, de-seeded and sliced <br><br>1 tomato, sliced<br><br>1 cucumber, sliced<br><br>1 potato, boiled and sliced<br><br>30 ml mint chutney - 30 ml<br><br>Salt - to taste <br><br>Chaat Masala - to taste <br></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p class=\"instructions\" style=\"margin-bottom: 30px;\">Nicely butter the bread slices.<br><br>Put a layer of mint chutney on the bread.<br><br>Put potatoes, cucumber, onion, capsicum and tomato slices.<br>&nbsp;<br>Season with salt and chaat masala.<br><br>Heat the frying pan and 1 tsp of butter.<br><br>Toast the sandwiches on both sides till crispy brown.<br>&nbsp;<br> </p></div></div>";
 }
 function i4()
 {
     document.getElementById("mainbody").innerHTML=" <div class=\"di\" style=\" background: url('images/Amritsar-murg-makhani_med.jpg')\" onclick=\"i4()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Amritsar Murg Makhani</h3></div></div> <div id=\"di1\"><u>Amritsar Murg Makhani</u><br><br> Succulent boneless pieces of chicken marinated and cooked in a rich gravy with cream, tomato and spices.<br><br> Recipe Cook Time:1 Hour 15 Minutes + Marination Time <br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li><strong>For the marination:</strong><br><br> 500 gm chicken pieces (boneless) <br><br> 2 tsp ginger paste<br><br> 2 tsp garlic paste <br><br> 3 tsp sour curd <br><br> 1 Tbsp lemon juice <br><br> 2 tsp vinegar <br><br> 1 tsp coriander powder<br><br> 1 tsp cumin powder<br><br> 1/2 onion, chopped<br><br> 1 1/2 tsp red chilli powder <br><br> Salt to taste <br> <br><br> <strong>For the gravy:</strong><br><br> 6 tomatoes<br><br> 1 1/2 Tbsp butter<br><br> 1 tsp red chilli powder <br><br> 1 tsp ginger - finely chopped<br><br> 1 green chilli - finely chopped<br><br>1/4 tsp orange color<br><br> 2 1/2 Tbsp fresh cream<br><br> 1 tsp coriander powder<br><br> 1 tsp cumin powder<br><br> 1 tsp sugar <br><br> Salt to taste<br> <br><br> <strong>For garnishing:</strong><br><br> 2 green chilies - chopped<br><br> 1 Tbsp butter<br><br> 2 Tbsp fresh cream<br><br> Fresh coriander leaves</li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Blend 6 tomatoes to a puree. Mix all the ingredients for marination to make a paste. Smear the chicken pieces with the paste and let it marinate for 2 hours. <br> <br> Heat 1 1/2&nbsp; tbsp of butter in a heavy bottom wok and add the marinated chicken to it. Cook till the chicken is tender. <br> <br> In a saucepan, heat 1 1/2 tbsp butter and add red chilli powder, coriander powder, cumin powder, ginger, salt and 1 chopped green chilli. <br> <br> Fry for some time. Add tomato puree, orange color, fresh cream and cook on medium flame till the puree thickens. <br> <br> Add the puree to the tender chicken along with 1 tsp sugar and 1/2 tsp cream. Let it simmer for 25 minutes. <br> <br> Garnish with fresh cream, finely chopped green chillies and coriander leaves. <br> <br> Serve with 1 Tbsp butter.</p></div> </div>";
 }
 function Chinese()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/fragrant-noodles_med.jpg')\" onclick=\"ch1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Fragrant Noodles</h3></div></div> <div class=\"di\" style=\" background: url('images/vegetarian-spring-rolls_med.jpg')\" onclick=\"ch1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Spring Rolls</h3></div></div></div> ";
 }
 function ch1()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/fragrant-noodles_med.jpg')\" onclick=\"ch1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Fragrant Noodles</h3></div></div> <div id=\"di1\"><u>Fragrant Noodles</u><br><br> Thin spaghetti cooked in the flavors of coriander, soy sauce and pepper.<br><br> Recipe Cook Time:30 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>400 gm thin spaghetti<br> <br>2 Tbsp sunflower or vegetable oil<br> <br>4 spring onions, thinly sliced<br> <br>100 gm coriander leaves, chopped<br> <br>3 Tbsp soy sauce<br> <br>1/4 tsp freshly-ground pepper<br><br></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Cook spaghetti according to package instructions.<br><br>Drain and set aside in a bowl.<br><br>In the saucepan used to cook the spaghetti, heat the oil over medium-high heat. <br><br>Add the spring onions and fry for a minute. Remove from the heat. <br><br>Stir in drained spaghetti, coriander, soy sauce and the pepper. <br><br>Serve immediately.<br><br> </p></div> </div> ";
 }
 function ch2()
 {
     document.getElementById("mainbody").innerHTML="  <div class=\"di\" style=\" background: url('images/vegetarian-spring-rolls_med.jpg')\" onclick=\"ch2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Spring Rolls</h3></div></div> <div id=\"di1\"><u>Spring Rolls</u><br><br> One of the most loved Chinese snack, here is the recipe of vegetarian spring rolls.<br><br> Recipe Cook Time:35 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li><b>For the </b><b>pancakes:<br></b><br>1/2 cup flour <br><br>1 egg <br><br>1/4 tsp salt <br><br>1/4 cup water <br><br>1/4 cup milk <br><br>3 Tbsp oil mix the water, oil and milk together   <br><br><br><b>For the filling:<br><br></b>1 cup thinly shredded cabbage <br><br>1 cups spring onions-including leaves, finely chopped <br><br>1 cup thinly shredded carrot <br><br>1/2 tsp salt <br><br>2 Tbsp oil <br><br>4 cloves garlic-very finely chopped <br><br>1 tsp soya sauce <br><br>2 Tbsp celery-chopped fine <br><br>1 Tbsp flour, made into thin paste by adding water <br><br>Oil for deep frying</li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Make the pancakes with the pancake ingredients.  <br><br>Heat the 1 tbsp oil and stir-fry the garlic and onions over high heat till the onions are a little soft. <br><br>Add the rest of the filling ingredients and turn around a few times, still over a high heat.  <br><br>Take a pancake and place a heaped tbsp of filling towards one edge. <br><br>Fold that edge over the filling, then the two sides thus formed over the fold, and roll over till the end, sealing that edge with the flour paste. <br><br>It is very important to seal the filling in, so that it does not spill out while frying.   Double fry the pancakes.</p></div> </div>";
 }
 function mexican()
 {
     document.getElementById("mainbody").innerHTML=" <div class=\"di\" style=\" background: url('images/burritos_med.jpg')\" onclick=\"m1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Vegetarian Burritos</h3></div></div> <div class=\"di\" style=\" background: url('images/Spiced-Fish-Wraps_med.jpg')\" onclick=\"m2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Spiced Fish Wraps</h3></div></div></div> ";
 }
 function m1()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/burritos_med.jpg')\" onclick=\"m1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Vegetarian Burritos</h3></div></div> <div id=\"di1\"><u>Vegetarian Burritos</u><br><br> Discover healthy eating with this delicious Mexican burritos recipe. Tortillas packed with a kidney beans and cheese mix, served with the sensational salsa sauce.<br><br> Recipe Cook Time:30 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>1/2 kg boiled rajma<br><br>2 Tbsp olive oil<br><br>1/2 tsp cumin powder<br><br>1/2 tsp coriander powder<br><br>1/2 tsp chili powder<br><br>1 tsp Tabasco<br><br>2&nbsp; lemons<br><br>1/2&nbsp; onion<br><br>Chopped lettuce<br><br>Processed mozzarella cheese<br><br><br><b>For salsa sauce: </b><br><br>2&nbsp; tomatoes<br><br>1 onion<br><br>2 jalapeno<br><br>1 lime<br><br>Handful of coriander leaves<br><br>1&nbsp; tsp cumin<br><br>Handful chives of spring onion<br><br>4 corn tortillas<br><br>Salt and pepper to taste</li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p><b>For the salsa sauce</b>:<br><br>Chop tomatoes, onions and jalapenos.<br><br>In a bowl, add tomatoes, onion, chives of spring onions, jalapenos chopped, and squeeze in 1 lime. <br><br>Add&nbsp; coriander leaves for the freshness and season it with cumin seeds, salt &amp; pepper and olive oil. Mix them well.<br><br><br><b>For the Burritos:</b><br><br>In a pan add olive oil and then heat the pan for a while. <br><br>Add kidney beans and slightly mash them.<br><br>Season it with salt and pepper.<br><br>Add cumin powder, coriander powder,&nbsp; chili powder and let the beans cook for some time.<br>&nbsp;<br>Then add tabasco sauce and squeeze in half a lime to lift the flavors of kidney beans.<br><br>Chop some onions and add it to kidney beans.<br><br>In a plate take corn tortilla and add kidney beans mixture, salsa sauce and coriander leaves.<br>&nbsp;<br>Season it with salt.<br><br>Now fold the tortilla and put it into a baking dish pre sprayed with olive oil.<br><br>Add a layer of mozzarella cheese and put the baking dish into the oven for 8-10 minutes at 180 degree. Finish with coriander leaves.<br><br> </p></div> </div> ";
 }
  function m2()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/Spiced-Fish-Wraps_med.jpg')\" onclick=\"m2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Spiced Fish Wraps</h3></div></div> <div id=\"di1\"><u>Spiced Fish Wraps</u><br><br> Chef Prateek shares the recipe of a simple and speedy meal. Fish fillets grilled and wrapped in whole grain tortillas.<br><br> Recipe Cook Time:45 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>2 tsp finely minced garlic<br><br>2 tsp ground cumin<br><br>3 Tbsp chili powder, divided<br>&nbsp;&nbsp;&nbsp; <br>3/4 tsp kosher salt<br><br>1/2 cup fresh lime juice<br><br>2 Tbsp red wine vinegar<br><br>2 Tbsp sour cream<br><br>2 Tbsp mayonnaise<br><br>1/4 cup plus 2 Tbsp extra-virgin olive oil, divided<br><br>1 red bell pepper, cut into thin strips<br><br>1 cup shredded carrot<br><br>1/3 cup minced red onion<br><br>2 pounds tilapia or snapper fillets, rinsed and patted dry<br><br>Kosher salt<br><br>6 extra-large, whole-grain flour tortillas<br><br>1/4 cup minced fresh cilantro (optional)<br><br>3 Tbsp minced, seeded serrano chiles (optional)<br><br>5 cups shredded Napa or savoy cabbage<br><br>1 1/2 cups prepared guacamole<br><br>1 cup crumbled cotija or queso fresco cheese<br><br>1 1/2 cups salted, roasted pepitas or pumpkin seeds <br><br></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p >Combine garlic, cumin, 1 tablespoon chili powder, and 3/4 teaspoon salt in a small bowl. <br><br>Stir in lime juice and vinegar. Whisk in sour cream and mayonnaise. <br><br>Slowly drizzle in 1/4 cup olive oil, whisking constantly. <br><br>Stir in bell pepper, carrot, and red onion. Cover and chill at least 30 minutes.<br>&nbsp;&nbsp;&nbsp; <br>Brush fish with remaining 2 tablespoons olive oil, and rub with remaining 2 tablespoons chili powder and kosher salt to taste. <br><br>Grill fish over medium-high heat (350° to 400°) for 3 to 4 minutes on each side or until fish flakes easily when tested with a fork.<br><br>While fish cooks, wrap tortillas in damp paper towels; microwave on high 1 minute or until pliable. <br><br>Using a slotted spoon, transfer bell pepper mixture from the dressing to a large bowl. Stir in cilantro and serrano chiles, if desired. <br><br>Add cabbage, and toss thoroughly, adding additional dressing if desired.<br><br>Spread tortillas evenly with guacamole, leaving a 3-inch border at the bottom. <br><br>Top evenly with fish, slaw, cheese, and pepitas. Fold the bottom edge up, and roll from one side to the other, encasing the filling.<br></p></div> </div> ";
 }
  function russian()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/chicken-shashlik-sizzler_med.jpg')\" onclick=\"r1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Chicken Shashlik Sizzler</h3></div></div> <div id=\"di1\"><u>Chicken Shashlik Sizzler</u><br><br> Marinated chicken chunks pierced along with capsicum, onion and tomato in a skewer, grilled crisp.<br><br> Recipe Cook Time:45 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li><b>Oven Temp: 450 F- 220 C</b>  <br><br>500 gm boneless chicken-cut into fairly large cubes <br><br>1 tbsp garlic paste <br><br>1 tbsp ginger paste <br><br>1/4 cup vinegar <br><br>chilli powder to taste <br><br>1 tsp <i>garam masala</i> <br><br>1 tbsp coriander seeds  <br><br>1 tsp salt or to taste <br><br>2-3 capsicums <br><br>2 onions <br><br>3-4 tomatoes <br><br>skewers  <br><br>oil to brush <br><br><i>chaat masala</i> to garnish</li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Prick chicken cubes and marinate in the garlic, ginger, vinegar, chilli powder, black pepper, powdered ingredients and salt. Leave thus 7 hours or overnight. <br><br>Cut the capsicums, onions and tomatoes to match the chicken cubes. <br><br>Thread a piece of tomato, onion and capsicum into the skewer and follow with a piece of chicken. Repeat thus till all the pieces are taken care of. <br><br>Pour whatever juices there may be over the prepared shashlik and place over a drip tray. <br><br>Brush with oil. Bake in a preheated oven 20-25 minutes, till cooked through and browned at the edges, or over a barbecue pit, or a grill. <br><br>Brush again with a little oil when almost done. <br><br>Serve hot over a bed of boiled rice. <br><br><b>*</b> <b>* </b>Before placing the chicken on the sizzler plate, heat the iron plate very hot. Place whatever accompaniments you are serving with it and immediately before serving on the table, splash some water and oil on it, and you will get the sizzling and fumes.</p></div> </div> ";
 }
  function soups()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/roasted-red-pepper-soup_med.jpg')\" onclick=\"s1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Roasted Red Pepper Soup</h3></div></div> <div class=\"di\" style=\" background: url('images/French-pea-soup_med.jpg')\" onclick=\"s2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">French Pea Soup</h3></div></div></div>  ";
 }
  function s1()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/roasted-red-pepper-soup_med.jpg')\" onclick=\"s1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Roasted Red Pepper Soup</h3></div></div> <div id=\"di1\"><u>Roasted Red Pepper Soup</u><br><br> Chef Vicky Ratnani gives the vegetables, which we underestimate, a makeover. Whip up a comforting bowl of red pepper soup.<br><br> Recipe Cook Time:35 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>2 Tbsp olive oil<br><br>1/2 stalk spring onions<br><br>30 gm leek<br><br>2 stalks celery<br><br>1 Tbsp ginger<br><br>2 red bell peppers<br><br>1 tomato<br><br>1 tsp paprika<br><br>60 ml tomato juice<br><br>1 liter vegetable stock<br><br>3-4 basil leaves<br><br>Juice and zest of 1/2 orange<br><br>Few sprigs of fresh oregano<br><br>1 bay leaf<br><br>1 Tbsp chopped onions<br><br><br></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>In a heavy bottomed pan, sweat the spring onions, leeks and celery.<br><br>Add the red bell peppers, ginger and tomatoes.<br><br>Cook for about 5-6 minutes.<br><br>Add the paprika powder, red chillies and tomato juice to the pan and cook for 6 more minutes.<br><br>Add the vegetable stock and cook for about 20 minutes till all the veggies are soft.<br><br>Blend the soup with a mixer or a blender till very smooth.<br><br>Add orange zest, chopped parsley and oregano.<br><br>Strain into a bowl.<br><br>Garnish with basil leaves.<br><br>Serve hot or cold.<br><br><br> </p></div> </div> ";
 }
  function s2()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/French-pea-soup_med.jpg')\" onclick=\"s2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">French Pea Soup</h3></div></div> <div id=\"di1\"><u>French Pea Soup</u><br><br> Go green with this light and lovely serving of pea soup. Goes best with a dollop of fresh cream!<br><br> Recipe Cook Time:25 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>500 gm shelled peas <br><br>1 onion, finely chopped <br><br>2 1/2 cup vegetable or chicken stock <br><br>1 Tbsp olive oil <br><br>2 tsp fresh cream <br><br>Salt and pepper to taste</li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Heat oil in a pan.&nbsp; Add the onion and saute till white. <br><br>Now add the peas and saute for about 5 minutes. <br><br>Add seasoning and vegetable stock. <br><br>Give it a boil and simmer till the peas are cooked. <br><br>Puree in a grinder. Heat again and serve hot topped with fresh cream.<br><br> </p><br><br><br> </p></div> </div> ";
 }
 function salad()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/som-tam-papaya-salad_med.jpg')\" onclick=\"sl1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Som Tam (Papaya Salad)</h3></div></div> <div class=\"di\" style=\" background: url('images/buckwheat-tabouleh_med.jpg')\" onclick=\"sl2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Buckwheat Tabouleh</h3></div></div></div> ";
 }
 function sl2()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/buckwheat-tabouleh_med.jpg')\" onclick=\"sl2()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Buckwheat Tabouleh</h3></div></div> <div id=\"di1\"><u>Buckwheat Tabouleh</u><br><br> Go green with this light and lovely serving of pea soup. Goes best with a dollop of fresh cream!<br><br> Recipe Cook Time:30 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>1 cup uncooked buckwheat<br><br>1 large bunch parsley, finely chopped<br><br>1 large bunch mint, finely chopped<br><br>1 large red onion, finely chopped<br><br>2 cucumbers, diced<br><br>2-3 organic tomatoes, diced<br><br>2 lemons, juiced<br><br>1 apple, peeled and chopped into chunks<br><br>1 tsp ground cumin or zatar<br><br>4 Tbsp olive oil<br><br>Salt and pepper to taste<br></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Cook buckwheat with 500 ml water in a rice cooker. Once cooked, rinse well with cold water and let drain.<br><br>Place parsley, mint, red onion, cucumbers, tomatoes and buckwheat into a large salad bowl. Set aside.<br><br>In a liquidizer, blend lemon juice, olive oil, cumin and apple until smooth. Season with salt and pepper. <br><br>Toss with the buckwheat salad and serve.<br><br><br> </p></div> </div> ";
 }
 function sl1()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/som-tam-papaya-salad_med.jpg')\" onclick=\"sl1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Som Tam (Papaya Salad)</h3></div></div> <div id=\"di1\"><u>Som Tam (Papaya Salad)</u><br><br> Rocky Singh's favorite Thai salad. Som Tam is a green papaya salad that combines all four tastes - sour, chilli, sweet and salty.<br><br> Recipe Cook Time:25 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>Small green raw papaya, shredded<br><br>4 chopped long beans <br><br>6 cloves garlic (or 1/4 pod)<br><br>8 cherry tomatoes cut into quarters<br><br>6 red or green chilly<br><br>2 Tbsp palm sugar (or 1 Tbsp regular sugar)<br><br>3 Tbsp lime juice<br><br>2 Tbsp fish sauce or soy sauce <br><br>3 Tbsp ground roasted peanuts<br><br>Fresh lettuce, green beans, lime wedges and chilly for garnish</li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Peel and seed papaya and shred it. Put in a bowl.<br><br>Crush garlic with a pestle, then add long beans and tomatoes and pound a few times to release juices. <br><br>Add the chillies and crush lightly to release the heat.<br><br>In a separate cup dissolve the sugar in the lime juice and fish sauce. <br><br>Mix all ingredients together now and toss to mix.<br><br>Serve in a shallow bowl and top with garnish.<br><br><br><b>Remember:</b><br><br>Do not blend but use mortar and pestle for the salad.<br><br>Do not add salt, the fish sauce or soy sauce has enough salt.<br><br>Taste once mixed and add any ingredient to taste ..this one is supposed to be deadly spicy.&nbsp; <br> </p></div> </div>";
 }
 function snacks()
 {
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/paneer-pakora_med.jpg')\" onclick=\"sn1()\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Paneer Pakoras</h3></div></div> <div id=\"di1\"><u>Paneer Pakoras</u><br><br> Paneer pieces dipped in gram flour, masalas and fried perfect. A perfect tea-time snack to munch on!<br><br> Recipe Cook Time:25 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>500 gm paneer-cut into desired sized pieces<br><br>For the batter 200 gm gram flour water<br><br>1 tsp red chilli powder<br><br>1 tsp turmeric<br><br>1 tsp crushed cumin salt<br><br>1 tsp soda bi-carb oil for deep frying chaat masala<br><br></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Make a thick batter with water, flour, red chilli powder, cumin, turmeric, salt and soda bi-carb.<br><br>Then coat each slice with the batter and deep fry. <br><br>Sprinkle with chaat masala and serve with ketchup or chutney.&nbsp; </p> </div>";
 }
 function fpass()
 {
     prompt("PLEASE enter your mobile number");
 }
function validate()
{
                    var a=document.getElementById("name").value;
                    var b=document.getElementById("email").value;
                    var c=document.getElementById("title").value;
                    var d=document.getElementById("ingred").value;
                    var e=document.getElementById("method").value;
                    var f=document.getElementById("ctime").value;
                    
                    
                           for(var i=0;i<a.length;i++)
                               {
                                   if ((a[i]>='a'&&a[i]<='z')||(a[i]>='A'&&a[i]<='Z')||(a[i]==' ') ) 
                                   {
                                       if (a[0]==' ')
                                       {
                                            alert("name cannot start with space");
                                        
                                       }
                                   }
                                   else
                                   {
                                       alert("invalid name. Please enter valid name");
                                   
                                   }
                              
                               }
                           for(i=0;i<f.length;i++)
                               {
                                   if ((f[i]>='a'&&f[i]<='z')||(f[i]>='A'&&f[i]<='Z')||(f[i]==' ')||(f>=1&&f<=24) )
                                   {
                                       if (a[0]==' ')
                                       {
                                            alert("name cannot start with space");
                                       }
                               
                                   }
                                   else
                                   {
                                   alert("invalid name. Please enter valid input");
                                   }
                                   
                               }                 
}

 function login()
 {
     var x=document.getElementById("un").value;
                         for(var i=0;i<x.length;i++)
                               {
                                   if ((x[i]>='a'&&x[i]<='z')||(x[i]>='A'&&x[i]<='Z')||(x[i]==' ') ) 
                                   {
                                       if (x[0]==' ')
                                       {
                                            alert("name cannot start with space");
                                       }
                                   }
                                   else
                                   {
                                       alert("invalid name. Please enter valid name");
                                   }
                               }
 }
 function comment()
 {
     var x=document.getElementById("nm1").value;
                         for(var i=0;i<x.length;i++)
                               {
                                   if ((x[i]>='a'&&x[i]<='z')||(x[i]>='A'&&x[i]<='Z')||(x[i]==' ') ) 
                                   {
                                       if (x[0]==' ')
                                       {
                                            alert("name cannot start with space");
                                       }
                                   }
                                   else
                                   {
                                       alert("invalid name. Please enter valid name");
                                   }
                               }
 }
 function register()
 {
     var x=document.getElementById("uname").value;
     var y=document.getElementById("pass1").value;
     var z=document.getElementById("pass2").value;
                         for(var i=0;i<x.length;i++)
                               {
                                   if ((x[i]>='a'&&x[i]<='z')||(x[i]>='A'&&x[i]<='Z')||(x[i]==' ') ) 
                                   {
                                       if (x[0]==' ')
                                       {
                                            alert("name cannot start with space");
                                       }
                                   }
                                   else
                                   {
                                       alert("invalid name. Please enter valid name");
                                   }
                                   
                               }
                               if (y!=z)
                                   {
                                        alert("invalid password. Please enter valid password");
                                   }
                               
 }
 function rec_day()
 {
     
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/fish-fry_med1.jpg')\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Kerala Fish Fry </h3></div></div> <div id=\"di1\"><u>Kerala Fish Fry </u><br><br> A lovely serving of fried fish from down South. Fish enriched with ginger, methi seeds, coriander powder and fried crisp.<br><br> Recipe Cook Time:25 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>500 gm fish - scaled and cut diagonally into 3cm pieces oil for frying <br><br>1 Tbsp ginger - chopped<br><br>1 Tbsp chilli powder <br><br>1 tsp coriander powder <br><br>1 tsp turmeric powder <br><br>1 tsp methi seeds <br><br>1 Tbsp vinegar salt - to taste<br><br></li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Wash fish, drain and keep aside.<br><br>Then add grind ginger, chilli powder, coriander, turmeric, methi, vinegar and salt into a paste.<br><br>Marinate the fish with the paste and keep aside for an hour.<br><br>Heat oil and fry the fish pieces till they turn light brown in colour. <br><br>Make sure that the flame is not too high. <br><br>Pierce the fish with a knife and if it flakes easily it is cooked. <br><br>Place the fish pieces on an absorbent paper to drain out the excess oil. <br><br>Serve hot. </p> </div> ";

 }
 
 function dessert()
 {
     
     document.getElementById("mainbody").innerHTML="<div class=\"di\" style=\" background: url('images/tiramisu-new_med.jpg')\"> <div class=\"he1\"> <h3 style=\"margin: 0px;color: white\">Tiramisu </h3></div></div> <div id=\"di1\"><u>Tiramisu </u><br><br> A classic Italian dessert! Sponge fingers dipped in a coffee and liqueur mixture, layered with a cream cheese mixture.<br><br> Recipe Cook Time:40 Minutes<br><br> </div> <div id=\"di2\"> <div id=\"idg\"><div class=\"idg\"> <h2 style=\"margin: 0px;color: black\">Ingredients:-</h2></div> <ul> <li>5 eggs - separated<br><br>1 cup sugar<br><br>500 gm cream cheese<br><br>500 gm cream<br><br>24 sponge fingers or 250 gm sponge cake - cut into strips<br><br>1 cup coffee liqueur-mixed with 1 cup strong coffee<br><br>Cocoa powder for garnish<br><br>A round glass dish about 10 inches</li> </ul> </div> <div id=\"met\"><div class=\"met\"> <h2 style=\"margin: 0px;color: black\">Method:-</h2></div> <p>Wash fish, drain and keep aside.<br><br>Then add grind ginger, chilli powder, coriander, turmeric, methi, vinegar and salt into a paste.<br><br>Marinate the fish with the paste and keep aside for an hour.<br><br>Heat oil and fry the fish pieces till they turn light brown in colour. <br><br>Make sure that the flame is not too high. <br><br>Pierce the fish with a knife and if it flakes easily it is cooked. <br><br>Place the fish pieces on an absorbent paper to drain out the excess oil. <br><br>Serve hot. </p> </div>  ";

 }
 
 function vd1()
 {
     document.getElementById("video").innerHTML="<video width=\"700px\" height=\"300px\" style=\"margin: 5px;\" controls autoplay> <source src=\"videos/Russian salad ( Olivier salad ) recipe[720P].MP4\" type=\"video/mp4\"></video> ";
 }
 
 function vd2()
 {
     document.getElementById("video").innerHTML="<video width=\"700px\" height=\"300px\" style=\"margin: 10px;\" controls autoplay> <source src=\"videos/Perfect Summer Recipe[720P].MP4\" type=\"video/mp4\"></video>";
 }
 
 function vd3()
 {
     document.getElementById("video").innerHTML="<video width=\"700px\" height=\"300px\" style=\"margin: 10px;\" controls autoplay> <source src=\"videos/Sanjeev Kapoor's Charmoula Paneer Steaks[360P].MP4\" type=\"video/mp4\"></video>";
 }
 
 function vd4()
 {
     document.getElementById("video").innerHTML="<video width=\"700px\" height=\"300px\" style=\"margin: 10px;\" controls autoplay><source src=\"videos/Perfect Egg Rolls [720P].MP4\" type=\"video/mp4\"></video>";
 }
 function vd5()
 {
     document.getElementById("video").innerHTML="<video width=\"700px\" height=\"300px\" style=\"margin: 10px;\" controls autoplay><source src=\"videos/Gulab Jamun .MP4\" type=\"video/mp4\"></video>";
 }