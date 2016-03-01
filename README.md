# Jude-Chavez
PWP milestone-1

### Milestone 1 Feedback

&#10004; Correctly set up the git/GitHub/PhpStorm toolchain.

&#10004; Create the directory structure for the project as outlined.

&#10004; Define a purpose, audience, and goal for your project.

&#10004; Create one Persona for your proposed project.

&#10008; Create one Use Case for your proposed project, based on the Persona.

All the elements except the Use Case are good to go. Remember that a Use Case detail how, when and why a user will use your site. Go ahead and get started on Milestone 2a. At the current time, your Milestone 1 passes at [Tier I](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Correct the Use Case and HTML and your Milestone 1 will pass at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

#### Edits/Suggestions
There are a few issues with your HTML
- The &lt;meta charset="utf-8"/&gt; tag is missing
- There should only be one &lt;body&gt; tag per page, and all the other content goes inside it. 


### Milestone 2&alpha; Feedback

&#10004; Create a sitemap outlining the pages you plan to include in your PWP.

&#10004; Document a brief plan or strategy for your content that will support the overall purpose and goal of the site.

&#10004; Map out a simple interaction flow that details the steps a user must take to successfully use your site to acheive the goal.

&#10004; Create a mobile and desktop/laptop wireframe for each page layout.

Nice job. I strongly suggest adding more detail into your wireframes. The wireframe should be a skeleton for the User Interface which you'll build using Bootstrap HTML &amp; CSS. This will provide you with a much better guide when you start building this project. Include details such as navigation links, buttons, text areas, headings, etc. Unless you have a lot of content you're planning to feature, I think this site might do well as a one page layout.

There are still some big problems with your HTML, similar to the ones Milestone 1. See corrections below.

Your Milestone 2&alpha; passes at [Tier II](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). Your Milestone passes, but based on your code, I *strongly* suggest spending additional time practicing HTML and Bootstrap before getting started on coding your PWP.

#### Edits &amp; Suggestions
- Watch your indentation and HTML coding style.
- &lt;meta charset="utf-8"/&gt; is missing.
- There should only be one &lt;body&gt; tag, and all of your page content should go inside that. There should never be any page content that is outside of the &lt;body&gt; tag.
- The alt text on your images should not be "not found", but something relevant to the image itself. Like "sitemap", "interaction flow", etc. 

### Milestone 2b Feedback
Nice work. Take a look at the notes we went over below, and check in with me or Skyler this week. After some cleanup, you should be ready to deploy to ASO next week.

Your Milestone 2b passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/)

#### Edits &amp; Suggestions
- Fix directory structure. Create an index.php file inside /public_html - this will be your home page.
- Add Flexbox Sticky Footer. See: https://bootcamp-coders.cnm.edu/~rlewis37/bootstrap-sample/
- Add Font Awesome for social icons
- Read up on the CSS background-image property to tile bg-images on sections of your layout.
- add contact form

Set up ASO Host:
- Go over https://bootcamp-coders.cnm.edu/class-materials/php/email/, add composer.json and mailer.php
- enable shell access - chat live support and request them to enable this
- Add your public SSH key (CPanel, SSH Access)
- Add an email account, and add an email forwarder if you like :)
- Create a new deployment in PhpStorm that uploads to ASO, and upload your site there.
