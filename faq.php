<?php $title = "Linked Research FAQ"; ?>
<?php include 'top.php'; ?>
    <main>
      <article about="" typeof="schema:Article">
        <h1 property="schema:name"><?=$title;?></h1>
        <div datatype="rdf:HTML" id="content" property="schema:description">
          <section id="document-status" rel="schema:hasPart" resource="#document-status">
            <h2 about="#document-status" property="schema:name" typeof="bibo:DocumentStatus">Document Status</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>Draft</p>
            </div>
          </section>

          <section id="faq" rel="schema:hasPart" resource="#faq">
            <h2 property="schema:name">FAQ</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <section id="faq-acid-test" rel="schema:hasPart" resource="#faq-acid-test-assumptions">
                <h3>How to verify the openness, accessibility, decentralisation, interoperability of approaches in scholarly communication?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                </div>
              </section>

              <section id="faq-reliable" rel="schema:hasPart" resource="#faq-reliable">
                <h3>If anyone can publish, how do we tell what's reliable or solid work?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-trolls" rel="schema:hasPart" resource="#faq-trolls">
                <h3>If peer review is like online comments, won't it be overrun with trolls, spam and general rubbish? How do we know what to trust? How do we filter out what's useful?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>
              
              <section id="faq-publishers" rel="schema:hasPart" resource="#faq-publishers">
                <h3>What is the role of academic publishers in the LR world?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>Researchers ultimately decide if and how they use third-party publishers.</p>
                </div>
              </section>

              <section id="faq-find-things" rel="schema:hasPart" resource="#faq-find-things">
                <h3>If everyone publishes in different places, how will I find things to study or cite?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-promotion" rel="schema:hasPart" resource="#faq-promotion">
                <h3>How can I get a promotion / tenure through publishing on my own site?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-libraries" rel="schema:hasPart" resource="#faq-libraries">
                <h3>Where do libraries and institutional repositories fit in to LR?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-linked-data" rel="schema:hasPart" resource="#faq-linked-data">
                <h3>Does Linked Research mandate Linked Data?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-not-dev" rel="schema:hasPart" resource="#faq-not-dev">
                <h3>I'm not a developer or a computer scientist, what can I do to help?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-tooling" rel="schema:hasPart" resource="#faq-tooling">
                <h3>Everything you say sounds great, but I can't find any tools to help me do this. Help?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>See <cite><a href="resources">Resources</a></cite> for a starter.</p>
                </div>
              </section>

              <section id="faq-formats" rel="schema:hasPart" resource="#faq-formats">
                <h3>I'd love to publish online but my field's conferences/journals/university only accepts PDF/LaTeX/paper, what do I do?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-blog" rel="schema:hasPart" resource="#faq-blog">
                <h3>I'm a student and I want to publish my research / notes / thesis on my blog as I make progress, but my supervisor says this is inappropriate. What do I do?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-stole" rel="schema:hasPart" resource="#faq-stole">
                <h3>I published my findings on my website as my project was ongoing, and someone more senior than me stole them and published in a journal. What do I do?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-license" rel="schema:hasPart" resource="#faq-license">
                <h3>How do licenses fit into all this?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>The creators of a work can decide on the most suitable license. Creative Commons is encouraged but additional rights may need to be declared.</p>
                </div>
              </section>

              <section id="faq-dont-know-how" rel="schema:hasPart" resource="#faq-dont-know-how">
                <h3>I'd love to publish my own work but I don't have a domain or web hosting, and I don't know HTML. What do I do?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-open-access" rel="schema:hasPart" resource="#faq-open-access">
                <h3>How does LR relate to Open Access?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-open-science" rel="schema:hasPart" resource="#faq-open-science">
                <h3>How does LR relate to Open Science?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>..</p>
                </div>
              </section>

              <section id="faq-html-profiles" rel="schema:hasPart" resource="#faq-html-profiles">
                <h3>I found a conference that accepts HTML, but it says it must use particular HTML profile, subset or a variation on it, is this still Linked Research?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>Publishing is more so about the author's needs, and less so about LR's. LR is not here to quality check or rule out options for you. Authors should however consider asking the venue who the specific constraint benefit - is it for the authors (proof?), or is it to make things easier for the third-party publishers or individuals that further process your work? Follow-up by asking why you are forbidden to use your own HTML or tooling, and restricted to use theirs. Generally speaking, it is not a healthy sign of a community that forbids your HTML needs.</p>
                </div>
              </section>

              <section id="faq-where-meet" rel="schema:hasPart" resource="#faq-where-meet">
                <h3>Where can I go to meet other people who support this effort?</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>Digitally, check the <a href="https://gitter.im/linkedresearch/chat">Linked Research Gitter chat</a>. <abbr title="In real life">IRL</abbr>, keep an eye on our <a href="/events">events</a> page to see where we might be holding a meetup or workshop next. Alternatively, arrange one yourself!</p>
                </div>
              </section>
            </div>
          </section>
        </div>
      </article>
    </main>
<?php include 'end.php'; ?>
