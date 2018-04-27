<?php $title = "Linked Research articles"; ?>
<?php include 'top.php'; ?>
<?php include 'articles-data.php'; ?>
    <main>
      <article about="" typeof="as:Collection">
        <h1 property="schema:name"><?=$title;?></h1>
        <section id="description" rel="schema:hasPart" resource="#description">
          <div datatype="rdf:HTML" property="schema:description as:summary">
            <p>Here we collect notes and articles about efforts towards and challenges with achieving the Linked Research principles, or making it easier for others to do so, from around the Web.</p>

            <p>If we missed one, please do <a href="https://github.com/linkedresearch/linkedresearch.org/">make a pull request</a>.</p>
          </div>
        </section>
        
        <?foreach($articles as $article):?>
          <article id="<?=$article['slug']?>" rel="schema:hasPart as:item" resource="<?=$article['slug']?>" typeof="schema:Article">
            <h2 property="schema:name"><?=$article['name']?></h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p><em>Published on <time datetime="<?=$article['published']->format(DATE_ATOM)?>"><?=$article['published']->format("d M Y")?></time> by <?=list_authors($article['author'])?>.</em></p>
              <?=$article['summary']?>
              <p>... <strong><a href="<?=$article['id']?>">Read at <?=$article['root']?></a></strong></p>
            </div>
          </article>
        <?endforeach?>
      </article>
    </main>
<?php include 'end.php'; ?>