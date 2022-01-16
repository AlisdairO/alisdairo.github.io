<?php include("head.php"); ?>
<div class="fullwidth">
<h3>examineRDF</h3>
<p>examineRDF is a tool I developed during the course of my PhD to produce statistics about large RDF datasets on machines with limited memory/cpu.  Example output is shown below.</p> 

<a name="examples"><h4>Example output</h4></a>
<p>
<a href="./output/uniprot.html">UniProt</a><br />
<a href="./output/dbpedia.html">DBpedia</a><br />
<a href="./output/ciaworldfactbook.html">CIA World Factbook</a><br />
<a href="./output/BSBM_large.html">105M triple BSBM dataset</a><br />
</p>

<h4>How it works</h4>
<p>examineRDF uses the Redland Raptor library to parse incoming triples, and then uses a fixed size hash table to group related data into manageable chunks across a set of temporary output files, which it then processes in more detail.  Using this technique it can handle pretty much any dataset while still scaling in linear fashion.  It is limited by the fact that it cannot currently produce stats that require joins within the data.</p>
<p>As it stands, examineRDF takes about 2 hours to process a billion triples on dual 1.8 GHz Opteron with 8GB of DDR1 memory.  It can run with less memory with very little performance loss.</p>

<h4>How can I get it?</h4>
<p>ExamineRDF can be found at <a href="https://forge.ecs.soton.ac.uk/projects/examinerdf/">University of Southampton ECS Forge</a></p>

</div>
<?php include("foot.php"); ?>
