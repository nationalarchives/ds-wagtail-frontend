## Running the project

- Install PHP (make sure you have PHP 8 or above by running `php -v`)
- Run `php -S localhost:8080` from the root folder. You can pick any port instead of 8080 if needed.

## Creating a new page

Create a folder for each prototype and use `template_for_new_pages.php` as the starting point for new pages

## Using SASS

- Install SASS globally by running `npm install -g sass`.
- To watch and build the SASS, run `sass --watch sass/etna.scss:css/dist/etna.css`
- To modify styles, navigate to the `sass` folder in your editor.
=======
# Wagtail frontend

## Background

Following the development planning meeting with Numiko on 4 May we have agreed that the client-side code will be prepared outside of Wagtail and integrated when ready. This approach has been shown to work well on other projects and is intended to provide a level of independence that will:

* improve productivity and the pace of both backend and frontend development 
* permit much faster iteration of user interfaces.

## Key information for developers

All developers should follow these principles when working with this repository: 

<dl>
    <dt>Follow the <a href="https://github.com/nationalarchives/front-end-development-guide">development guide</a></dt>
    <dd>
        <p>Keep the development guide in mind, including the <a href="https://github.com/nationalarchives/front-end-development-guide/blob/master/development-guide.md#practical-application-of-progressive-enhancement-at-tna">practical application of progressive enhancement</a> - journeys being met with reliance upon only HTML and HTTP. Once this is in place we apply design, layout and other enhancements as non-breaking changes to the underlying journey.</p>
        <p>All code must have been tested for <strong>WCAG 2.1 compliance at Level AA</strong> before it is merged.</p>
        </dd>
    <dt>The main branch is for production ready code only<dt>
    <dd>
        <p>While feature branches can be used for the exploration of different user interfaces <strong>the main branch should only contain production ready code</strong> that is ready for integration into <a href="https://github.com/nationalarchives/ds-wagtail">the Wagtail repository for Etna</a>.</p>
        <p>Remember that this code would need to reflect all relevant screen sizes</p>
    </dd>
    <dt>Pull requests for everything</dt>
    <dd>
        <p>As normal, all merges from a feature branch should be via a PR</p>
    </dd>
    <dt>Keep everyone up to date via the PR</dt>
    <dd>
        <p>To keep everyone up to date, make all members of the front end team reviewers for a given PR, but <strong>ask one person to lead on the review</strong>
    </dd>
    <dt>Use <a href="http://getbem.com/introduction/">BEM</a> for everything</dt>
    <dd>
        <p>While many Etna components might not be applicable to the <a href="https://github.com/nationalarchives/tna-frontend-design-toolkit">TNA frontend design toolkit</a> we want to ensure it is easy to submit components for inclusion.</p>
        <p>A number of best practices for working with BEM are described in the <a href="https://github.com/nationalarchives/tna-frontend-toolkit/blob/develop/CONTRIBUTING.md">contribution guidelines</a> for a previous version of the toolkit.
    </dd>
    <dt>Use the Functional & Technical Specification document</dt>
    <dd>
        <p>All the functional and technical requirements for components are contained in <a href="https://docs.google.com/document/d/1b2yDpzBaZAw3EDvokARb0mjLdG0kF8SNV38TpMMgZkg/edit#">Functional & Technical Specification</a>. Use this document as the basis for components, updating the document as necessary where applicable. If something is missing or ambiguous raise this with the Etna product team.</p>
    </dd>   
    <dt>A folder for each prototype and an include for each component</dt>
    <dd>
        <p>To keep things organised we'll have a folder for each prototype and a single includes folder which all prototypes can share.
    </dd> 
    <dt>Keep the index page up to date</dt>
    <dd>
        <p>To support in-broser navigation, all pages should be linked to from the `index.php` file.
    </dd> 
</dl>
