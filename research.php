<!DOCTYPE html>
<html lang="en" dir="ltr">

<head><?php include "./head.php" ?></head>

<body>

<div class="container-header">
    <img src="img/research2.png" id="header-img" alt="Research Photo" />
    <h1>our research</h1>
    <?php include "./nvbar.php" ?>
</div>

<!-- main section open -->
<div class='container-body'>
    <div class='cotainer-content'>
    <div class="research">


    <h2>Fundamental Immunology</h2>
<button type="button" class="collapsible"><button-text>Germinal Center B Cell Evolution</button-text></button-text></button><div class="content"><p>
<ul>
        <li>Elucidating the principles underlying B cell entry into the germinal center antibody evolution process
        </li>
				<li>Investigating what determines the extent of antibody gene mutation in germinal centers
        </li>
				<li>Shedding additional light on why B cells mutate their antigen receptors
				</li>
</ul>
</p></div>

<button type="button" class="collapsible"><button-text>Antibody Durability</button-text></button-text></button><div class="content"><p>
<ul>
        <li>Elucidating mechanisms regulating durability and breadth of antibody responses in vaccine and infection-induced immunity
        </li>
				<li>Unraveling factors that can be optimized in vaccine strategies to provide maximized antibody durability and breadth against infectious diseases 
        </li>

</ul>
</p></div>


<button type="button" class="collapsible"><button-text>Mutational Tolerance</button-text></button-text></button><div class="content"><p>
<ul>
        <li>Evaluate the amount of hypermutation a protein can handle
        </li>
				<li>Understand factors that influence and contribute to protein mutability and tolerance
        </li>
</ul>
</p></div>


<button type="button" class="collapsible"><button-text>Primary B Cell Diversity</button-text></button-text></button><div class="content"><p>
<ul>
        <li>Identifying how polyreactivity in the B cell repertoire is dynamically regulated
        </li>
				<li>Elucidating contributory mechanisms influencing how the microbiome regulates baseline B cell antigen receptor polyreactivity
        </li>
				<li>Identifying how the primary B cell receptor repertoire contributes to immunodominance patterns
				</li>
</ul>
</p></div>


<button type="button" class="collapsible"><button-text>Evolution of adaptive immunity</button-text></button-text></button><div class="content"><p>
<ul>
        <li>Identifying and characterizing immune operations in jawless vertebrates to gain insights into origins of adaptive immunity
        </li>
</ul>
</p></div>

<br/>
<h2>Allergy and IgE</h2>
<button type="button" class="collapsible"><button-text>IgE</button-text></button-text></button><div class="content"><p>
<ul>
        <li>Understanding factors that make IgE production unique
        </li>
				<li>Identifying where IgE is produced and how it is distributed to effector sites
        </li>
				<li>Investigating how ticks can cause α-gal-related food allergy
				</li>
</ul>
</p></div>


<button type="button" class="collapsible"><button-text>Origins of Allergy</button-text></button-text></button><div class="content"><p>
<ul>
        <li>Using a jawless vertebrate model to probe the origins of Th2 immunity
        </li>
</ul>
</p></div>

<br/>
<h2>Technology Development</h2>
<button type="button" class="collapsible"><button-text>Flipped Germinal Center</button-text></button-text></button><div class="content"><p>
<ul>
        <li>Developing new technology to re-engineer the germinal center to function as an automated mutation and selection platform of user-defined protein targets to user-defined ligands
        </li>
</ul>
</p></div>

    

    
</div>

<br/><br/><br/>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}

</script>


</div>
</div>
<!-- main section close -->
<!-- footer open -->
    <!-- <P style="padding-top: 15px;" ></P> -->
    <?php include "./footer.php" ?>
<!-- footer close -->

</body>  
</html>