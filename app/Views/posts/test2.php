<div class="posts-container mx-auto my-5">
    <div class="text-start">
        <div class="post">
            <h1 class="fw-semibold">
                <a href="/2025/05/05/bootstrap-5-3-6/" class="text-decoration-none">Bootstrap 5.3.6</a>
            </h1>

            <div class="d-flex align-items-center mb-4 text-muted author-info">
                <span class="d-flex align-items-center" title="05 May 25 15:22 UTC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                    </svg>
                    May 05, 2025</span>
            </div>




            <p>Bootstrap v5.3.6 was just released to migrate our documentation to Astro from Hugo. Also included are a few bug fixes and documentation updates.</p>
            <p>Here are some highlights:</p>
            <ul>
                <li>Ported the docs from Hugo to Astro for our own sanity!</li>
                <li>Added usage docs for Accordion JavaScript</li>
                <li>Prevent <code>.visually-hidden</code> overflowing children to become focusable</li>
                <li>Limit <code>.card-group</code> selectors to immediate children to fix some inheritance issues</li>
            </ul>
            <p>Most importantly, a massive thank you and shoutout to Bootstrap maintainer <a href="https://github.com/julien-deramond">Julien</a> for all the work that went into our Astro migration. <a href="https://www.reddit.com/r/interestingasfuck/comments/1g3db1e/the_blue_marlin_the_ship_that_ships_shipping_ships/">What a massive ship.</a></p>
            <p><a href="https://github.com/twbs/bootstrap/releases/tag/v5.3.6">Read the GitHub v5.3.6 changelog</a> for a full list of changes (including a ton of documentation and dependency updates) in this release.</p>
            <h2 id="get-the-release">Get the release</h2>
            <p><strong>Head to <a href="https://getbootstrap.com">https://getbootstrap.com</a> for the latest.</strong> It’s also been pushed to npm:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma">
                        <code class="language-sh" data-lang="sh">
                            <span class="line"><span class="cl">npm i bootstrap@v5.3.6</span></span>
                        </code>
                    </pre>
                </div>
            </div>
            <h2 id="support-the-team">Support the team</h2>
            <p>Visit our <a href="https://opencollective.com/bootstrap">Open Collective page</a> or our <a href="https://github.com/orgs/twbs/people">team members</a>’ GitHub profiles to help support the maintainers contributing to Bootstrap.</p>

        </div>

        <div class="post">
            <h1 class="post-title fw-semibold">
                <a href="/2025/04/04/bootstrap-5-3-5/" class="text-decoration-none">Bootstrap 5.3.5</a>
            </h1>

            <div class="d-flex align-items-center mb-4 text-muted author-info">
                <a class="d-flex align-items-center text-muted text-decoration-none" href="https://github.com/mdo" target="_blank" rel="noopener">
                    <img class="mb-0 me-2 rounded-2" srcset="https://github.com/mdo.png?size=32, https://github.com/mdo.png?size=64 2x" src="https://github.com/mdo.png?size=32" alt="" loading="lazy" width="32" height="32">
                    <span>@mdo</span>
                </a>
                <span class="d-flex align-items-center ms-3" title="04 Apr 25 15:22 UTC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                    </svg>
                    April 04, 2025</span>
            </div>




            <p>Bootstrap v5.3.5 was released as a hotfix for a regression from upstream in Autoprefixer that caused floating form labels to always be “floated” in Firefox due to unintended CSS output.</p>
            <p><a href="https://github.com/twbs/bootstrap/releases/tag/v5.3.5">Read the GitHub v5.3.5 changelog</a> for a full list of changes (including a ton of documentation and dependency updates) in this release.</p>
            <h2 id="get-the-release">Get the release</h2>
            <p><strong>Head to <a href="https://getbootstrap.com">https://getbootstrap.com</a> for the latest.</strong> It’s also been pushed to npm:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-sh" data-lang="sh"><span class="line"><span class="cl">npm i bootstrap@v5.3.5
</span></span></code></pre>
                </div>
            </div>
            <h2 id="support-the-team">Support the team</h2>
            <p>Visit our <a href="https://opencollective.com/bootstrap">Open Collective page</a> or our <a href="https://github.com/orgs/twbs/people">team members</a>’ GitHub profiles to help support the maintainers contributing to Bootstrap.</p>

        </div>
        <div class="post">
            <h1 class="post-title fw-semibold">
                <a href="/2025/04/03/bootstrap-5-3-4/" class="text-decoration-none">Bootstrap 5.3.4</a>
            </h1>

            <div class="d-flex align-items-center mb-4 text-muted author-info">
                <a class="d-flex align-items-center text-muted text-decoration-none" href="https://github.com/mdo" target="_blank" rel="noopener">
                    <img class="mb-0 me-2 rounded-2" srcset="https://github.com/mdo.png?size=32, https://github.com/mdo.png?size=64 2x" src="https://github.com/mdo.png?size=32" alt="" loading="lazy" width="32" height="32">
                    <span>@mdo</span>
                </a>
                <span class="d-flex align-items-center ms-3" title="03 Apr 25 15:22 UTC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                    </svg>
                    April 03, 2025</span>
            </div>




            <p>Bootstrap v5.3.4 is here with several bug fixes and a load of documentation updates. Here are a handful of highlights from the CSS and JS changes:</p>
            <ul>
                <li>Fixed modal and offcanvas headers collapsing when any padding variables were set to <code>0</code>.</li>
                <li>Fixed close button display in color modes.</li>
                <li>Fixed light mode carousel when in dark mode.</li>
                <li>Updated floating labels for better <code>&lt;select&gt;</code> alignment and other styling issues.</li>
                <li>Fixed a Sass 1.77.7 deprecation for nested rules</li>
                <li>Fixed popover toggling twice to close.</li>
            </ul>
            <p><a href="https://github.com/twbs/bootstrap/releases/tag/v5.3.4">Read the GitHub v5.3.4 changelog</a> for a full list of changes (including a ton of documentation and dependency updates) in this release.</p>
            <h2 id="get-the-release">Get the release</h2>
            <p><strong>Head to <a href="https://getbootstrap.com">https://getbootstrap.com</a> for the latest.</strong> It’s also been pushed to npm:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-sh" data-lang="sh"><span class="line"><span class="cl">npm i bootstrap@v5.3.4
</span></span></code></pre>
                </div>
            </div>
            <h2 id="support-the-team">Support the team</h2>
            <p>Visit our <a href="https://opencollective.com/bootstrap">Open Collective page</a> or our <a href="https://github.com/orgs/twbs/people">team members</a>’ GitHub profiles to help support the maintainers contributing to Bootstrap.</p>

        </div>
        <div class="post">
            <h1 class="post-title fw-semibold">
                <a href="/2024/02/20/bootstrap-5-3-3/" class="text-decoration-none">Bootstrap 5.3.3</a>
            </h1>

            <div class="d-flex align-items-center mb-4 text-muted author-info">
                <a class="d-flex align-items-center text-muted text-decoration-none" href="https://github.com/julien-deramond" target="_blank" rel="noopener">
                    <img class="mb-0 me-2 rounded-2" srcset="https://github.com/julien-deramond.png?size=32, https://github.com/julien-deramond.png?size=64 2x" src="https://github.com/julien-deramond.png?size=32" alt="" loading="lazy" width="32" height="32">
                    <span>@julien-deramond</span>
                </a>
                <span class="d-flex align-items-center ms-3" title="20 Feb 24 15:22 UTC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                    </svg>
                    February 20, 2024</span>
            </div>




            <p>Bootstrap v5.3.3 is here with bug fixes, documentation improvements, and more follow-up enhancements for color modes. Keep reading for the highlights!</p>
            <h2 id="highlights">Highlights</h2>
            <ul>
                <li>Fixed a breaking change introduced with color modes where it was required to manually import <code>variables-dark.scss</code> when building Bootstrap with Sass. Now, <code>_variables.scss</code> will automatically import <code>_variables-dark.scss</code>. If you were already importing <code>_variables-dark.scss</code> manually, you should keep doing it as it won’t break anything and will be the way to go in v6.</li>
                <li>Fixed a regression in the selector engine that wasn’t able to handle multiple IDs anymore.</li>
            </ul>
            <h2 id="color-modes">Color modes</h2>
            <ul>
                <li>Badges now use the <code>.text-bg-*</code> text utilities to be certain that the text is always readable (especially when the customized colors are different in light and dark modes).</li>
                <li>Fixed our <code>color-modes.js</code> script to handle the case where the OS is set to light mode and the auto color mode is used on the website. If you copied the script from our docs, you should apply <a href="https://github.com/twbs/bootstrap/commit/73e1dcf43eff8371dde52ce41bd1d9fdc2b47d1f">this change</a> to your own script.</li>
                <li>Fixed color schemes description in the color modes documentation to show that <code>color-scheme()</code> only accept <code>light</code> and <code>dark</code> values as parameters.</li>
            </ul>
            <h2 id="miscellaneous">Miscellaneous</h2>
            <ul>
                <li>Allowed <code>&lt;dl&gt;</code>, <code>&lt;dt&gt;</code> and <code>&lt;dd&gt;</code> in the sanitizer.</li>
                <li>Dropped evenly items distribution for modal and offcanvas headers.</li>
                <li>Fixed the accordion CSS selectors to avoid inheritance issues when nesting accordions.</li>
                <li>Fixed the focus box-shadow for the validation stated form controls.</li>
                <li>Fixed the focus ring on focused checked buttons.</li>
                <li>Fixed the product example mobile navbar toggler.</li>
                <li>Changed the RTL processing of carousel control icons.</li>
            </ul>
            <h2 id="docs">Docs</h2>
            <ul>
                <li>Dropped unnecessary right margin for example code blocks.</li>
                <li>Fixed emphasis text utilities usage in <a href="https://getbootstrap.com/docs/5.3/utilities/background/#background-color">background utilities examples</a> section.</li>
                <li>Added an technical explanation on how to render an accordion expanded by default.</li>
                <li>Changed Vite config path import in Vite guide.</li>
                <li>Enhanced the card image description of the <code>.card-img-*</code> classes.</li>
                <li>Mentioned <code>shift-color()</code> function in the Sass customization page among <code>tint-color()</code> and <code>shade-color()</code>.</li>
                <li>Added missing <code>type="button"</code> attribute to the Cheatsheet examples navigation buttons.</li>
                <li>Updated the colors table in the customization page to be responsive.</li>
            </ul>
            <h2 id="get-the-release">Get the release</h2>
            <p><strong>Head to <a href="https://getbootstrap.com">https://getbootstrap.com</a> for the latest.</strong> It’s also been pushed to npm:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-sh" data-lang="sh"><span class="line"><span class="cl">npm i bootstrap@v5.3.3
</span></span></code></pre>
                </div>
            </div>
            <p><a href="https://github.com/twbs/bootstrap/releases/tag/v5.3.3">Read the GitHub v5.3.3 changelog</a> for a complete list of changes in this release.</p>
            <h2 id="support-the-team">Support the team</h2>
            <p>Visit our <a href="https://opencollective.com/bootstrap">Open Collective page</a> or our <a href="https://github.com/orgs/twbs/people">team members</a>’ GitHub profiles to help support the maintainers contributing to Bootstrap.</p>

        </div>
        <div class="post">
            <h1 class="post-title fw-semibold">
                <a href="/2023/09/14/bootstrap-5-3-2/" class="text-decoration-none">Bootstrap 5.3.2</a>
            </h1>

            <div class="d-flex align-items-center mb-4 text-muted author-info">
                <a class="d-flex align-items-center text-muted text-decoration-none" href="https://github.com/julien-deramond" target="_blank" rel="noopener">
                    <img class="mb-0 me-2 rounded-2" srcset="https://github.com/julien-deramond.png?size=32, https://github.com/julien-deramond.png?size=64 2x" src="https://github.com/julien-deramond.png?size=32" alt="" loading="lazy" width="32" height="32">
                    <span>@julien-deramond</span>
                </a>
                <span class="d-flex align-items-center ms-3" title="14 Sep 23 14:30 UTC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                    </svg>
                    September 14, 2023</span>
            </div>




            <p>Bootstrap v5.3.2 is here with bug fixes, documentation improvements, and more follow-up enhancements for color modes. Keep reading for the highlights!</p>
            <h2 id="highlights">Highlights</h2>
            <ul>
                <li>Passing a percentage unit to the global <code>abs()</code> is deprecated since Dart Sass v1.65.0. It resulted in a deprecation warning when compiling Bootstrap with Dart Sass. This has been fixed internally by changing the values passed to the <code>divide()</code> function. The <code>divide()</code> function has not been fixed itself so that we can keep supporting node-sass cross-compatibility. In v6, this won’t be an issue as we plan to drop support for node-sass.</li>
                <li>Using multiple ids in a collapse target wasn’t working anymore and has been fixed.</li>
            </ul>
            <h2 id="color-modes">Color modes</h2>
            <ul>
                <li>Increased color contrast of form range track background in light and dark modes.</li>
                <li>Fixed table state rendering for color modes with a focus on the striped table in dark mode to increase color contrast.</li>
                <li>Allow <code>&lt;mark&gt;</code> color customization for color modes.</li>
            </ul>
            <h2 id="docs">Docs</h2>
            <ul>
                <li>Added alternative CDNs section in <a href="https://getbootstrap.com/docs/5.3/getting-started/download/#alternative-cdns">Getting started -&gt; Download</a>.</li>
                <li>Added Discord and Bootstrap subreddit links in <a href="https://github.com/twbs/bootstrap/blob/main/README.md">README</a> and <a href="https://getbootstrap.com/docs/5.3/getting-started/introduction/">Getting started -&gt; Introduction</a>:
                    <ul>
                        <li><a href="https://discord.gg/bZUvakRU3M">Discord</a> maintained by the community</li>
                        <li><a href="https://www.reddit.com/r/bootstrap/">Bootstrap subreddit</a></li>
                    </ul>
                </li>
            </ul>
            <h2 id="get-the-release">Get the release</h2>
            <p><strong>Head to <a href="https://getbootstrap.com">https://getbootstrap.com</a> for the latest.</strong> It’s also been pushed to npm:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-sh" data-lang="sh"><span class="line"><span class="cl">npm i bootstrap@v5.3.2
</span></span></code></pre>
                </div>
            </div>
            <p><a href="https://github.com/twbs/bootstrap/releases/tag/v5.3.2">Read the GitHub v5.3.2 changelog</a> for a complete list of changes in this release.</p>
            <h2 id="support-the-team">Support the team</h2>
            <p>Visit our <a href="https://opencollective.com/bootstrap">Open Collective page</a> or our <a href="https://github.com/orgs/twbs/people">team members</a>’ GitHub profiles to help support the maintainers contributing to Bootstrap.</p>

        </div>
        <div class="post">
            <h1 class="post-title fw-semibold">
                <a href="/2023/09/12/bootstrap-icons-1-11-0/" class="text-decoration-none">Bootstrap Icons v1.11.0</a>
            </h1>

            <div class="d-flex align-items-center mb-4 text-muted author-info">
                <a class="d-flex align-items-center text-muted text-decoration-none" href="https://github.com/mdo" target="_blank" rel="noopener">
                    <img class="mb-0 me-2 rounded-2" srcset="https://github.com/mdo.png?size=32, https://github.com/mdo.png?size=64 2x" src="https://github.com/mdo.png?size=32" alt="" loading="lazy" width="32" height="32">
                    <span>@mdo</span>
                </a>
                <span class="d-flex align-items-center ms-3" title="12 Sep 23 00:01 UTC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                    </svg>
                    September 12, 2023</span>
            </div>




            <p><a href="https://icons.getbootstrap.com">Bootstrap Icons v1.11.0</a> has arrived with 100 new icons—including new floppy disk icons, additional brand icons, new person icons, new emojis, some birthday cake, a few new science icons, and more. We’re now at <strong>over 2,000 icons</strong>!</p>
            <h2 id="100-new-icons">100 new icons</h2>
            <p>Here’s a quick look at all the new icons in v1.11.0:</p>
            <p><img src="/assets/img/2023/09/icons-1-11-0.png" class="d-block img-fluid mb-2 rounded border" alt="New icons in v1.11.0" width="1920" height="648" loading="lazy">
            </p>
            <p><a href="https://github.com/twbs/icons/pull/1792">Check out the pull request</a> for all the details on which icons were added and which were updated.</p>
            <p>I’ve also started adding a new <code>added</code> tag to icon pages with this release. So far I’ve only tagged v1.10.0 and v1.11.0 versions, but more will come. Once those are all tagged, you’ll be able to search for icons added in each release. Stay tuned!</p>
            <p><em>Looking for more new icons? Head to the <a href="https://github.com/twbs/icons/issues">issue tracker</a> to check for open requests or submit a new one.</em></p>
            <h2 id="install">Install</h2>
            <p>To get started, install or update via npm:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-sh" data-lang="sh"><span class="line"><span class="cl">npm i bootstrap-icons
</span></span></code></pre>
                </div>
            </div>
            <p>Or Composer:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-sh" data-lang="sh"><span class="line"><span class="cl">composer require twbs/bootstrap-icons
</span></span></code></pre>
                </div>
            </div>
            <p>You can also <a href="https://github.com/twbs/icons/releases/tag/v1.11.0">download the release from GitHub</a>, or <a href="https://github.com/twbs/icons/releases/download/v1.11.0/bootstrap-icons-1.11.0.zip">download just the SVGs and fonts</a> (without the rest of the repository files).</p>
            <h2 id="figma">Figma</h2>
            <p>The Figma file is now published to the Figma Community! It’s the same <a href="https://www.figma.com/community/file/1042482994486402696/Bootstrap-Icons">Bootstrap Icons Figma file</a> you’ve seen from previous releases, just a little more accessible to those using the app.</p>

        </div>
        <div class="post">
            <h1 class="post-title fw-semibold">
                <a href="/2023/07/26/bootstrap-5-3-1/" class="text-decoration-none">Bootstrap 5.3.1</a>
            </h1>

            <div class="d-flex align-items-center mb-4 text-muted author-info">
                <a class="d-flex align-items-center text-muted text-decoration-none" href="https://github.com/mdo" target="_blank" rel="noopener">
                    <img class="mb-0 me-2 rounded-2" srcset="https://github.com/mdo.png?size=32, https://github.com/mdo.png?size=64 2x" src="https://github.com/mdo.png?size=32" alt="" loading="lazy" width="32" height="32">
                    <span>@mdo</span>
                </a>
                <span class="d-flex align-items-center ms-3" title="26 Jul 23 08:05 UTC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                    </svg>
                    July 26, 2023</span>
            </div>
            <div class="ratio ratio-16x9">
                <iframe class="lazy" data-src="https://www.youtube-nocookie.com/embed/WJ1I3ZmEozQ?rel=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" title="YouTube Video" width="760" height="570">
                </iframe>
            </div>




            <p>Bootstrap v5.3.1 is here with bug fixes, documentation improvements, and more follow-up enhancements for color modes. Keep reading for the highlights!</p>
            <ul>
                <li><strong>Color modes:</strong>
                    <ul>
                        <li>Increased color contrast for dark mode by replacing <code>$gray-500</code> with <code>$gray-300</code> for the body color</li>
                        <li>Added our color mode switcher JavaScript to our examples ZIP download</li>
                    </ul>
                </li>
                <li><strong>Components:</strong>
                    <ul>
                        <li>Improved disabled styling for all <code>.nav-link</code>s, providing <code>.disabled</code> and <code>:disabled</code> for use with anchors and buttons</li>
                        <li>Add support for <code>Home</code> and <code>End</code> keys for navigating tabs by keyboard</li>
                        <li>Added some basic styling to toggle buttons when no modifier class is present</li>
                        <li>Fixed carousel colors in dark mode</li>
                    </ul>
                </li>
                <li><strong>Forms:</strong>
                    <ul>
                        <li>Fixed floating label disabled text color</li>
                    </ul>
                </li>
                <li><strong>Utilities:</strong>
                    <ul>
                        <li><code>.text-bg-*</code> utilities now use CSS variables</li>
                    </ul>
                </li>
                <li><strong>Sass:</strong>
                    <ul>
                        <li>Add new <code>$navbar-dark-icon-color</code> Sass variable</li>
                        <li>Removed duplicate <code>$alert</code> Sass variables</li>
                        <li>Added a new variable for <code>$vr-border-width</code> to customize the vertical rule helper width</li>
                    </ul>
                </li>
                <li><strong>Documentation:</strong>
                    <ul>
                        <li>Added search to our homepage</li>
                        <li>Improved responsive behavior on Dashboard example</li>
                        <li>Improved dark mode rendering of Cheatsheet examples</li>
                    </ul>
                </li>
            </ul>
            <h2 id="get-the-release">Get the release</h2>
            <p><strong>Head to <a href="https://getbootstrap.com">https://getbootstrap.com</a> for the latest.</strong> It’s also been pushed to npm:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-sh" data-lang="sh"><span class="line"><span class="cl">npm i bootstrap@v5.3.1
</span></span></code></pre>
                </div>
            </div>
            <p><a href="https://github.com/twbs/bootstrap/releases/tag/v5.3.1">Read the GitHub v5.3.1 changelog</a> for a complete list of changes in this release.</p>
            <h2 id="support-the-team">Support the team</h2>
            <p>Visit our <a href="https://opencollective.com/bootstrap">Open Collective page</a> or our <a href="https://github.com/orgs/twbs/people">team members</a>’ GitHub profiles to help support the maintainers contributing to Bootstrap.</p>

        </div>
        <div class="post">
            <h1 class="post-title fw-semibold">
                <a href="/2023/05/30/bootstrap-5-3-0/" class="text-decoration-none">Bootstrap 5.3.0</a>
            </h1>

            <div class="d-flex align-items-center mb-4 text-muted author-info">
                <a class="d-flex align-items-center text-muted text-decoration-none" href="https://github.com/mdo" target="_blank" rel="noopener">
                    <img class="mb-0 me-2 rounded-2" srcset="https://github.com/mdo.png?size=32, https://github.com/mdo.png?size=64 2x" src="https://github.com/mdo.png?size=32" alt="" loading="lazy" width="32" height="32">
                    <span>@mdo</span>
                </a>
                <span class="d-flex align-items-center ms-3" title="30 May 23 07:35 UTC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                    </svg>
                    May 30, 2023</span>
            </div>
            <div class="ratio ratio-16x9">
                <iframe class="lazy" data-src="https://www.youtube-nocookie.com/embed/GC5E8ie2pdM?rel=0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" title="YouTube Video" width="760" height="570">
                </iframe>
            </div>




            <p>It’s official, the final stable release of v5.3.0 has landed! It’s been a monumental effort to revamp our codebase for CSS variables and color modes, one that will see continued changes leading up to an eventual Bootstrap 6. And we’re so excited to finally ship it!</p>
            <p>On top of all the work that’s gone into this release, a lot has happened behind the scenes since we shipped our pre-releases. Keep reading to learn everything that’s new in v5.3.0.</p>
            <h2 id="whats-new">What’s new</h2>
            <ul>
                <li><a href="#dark-mode">Dark mode support</a></li>
                <li><a href="#custom-color-modes">Custom color modes support</a> for themes beyond light and dark</li>
                <li><a href="#refreshed-color-palette">Extended color palette</a> for theme colors that adapt to color modes</li>
                <li><a href="#new-link-helpers-and-utilities">New link helpers</a>, link utilities, and focus ring helpers</li>
                <li><a href="#new-nav-underline">New nav underline</a> variant</li>
                <li>Several new utilities, bug fixes, and <a href="#and-much-more">much more</a>!</li>
            </ul>
            <p>Keep reading for the deep dive on all the top new features.</p>
            <h2 id="dark-mode">Dark mode</h2>
            <p>Bootstrap’s core has been rewritten to provide first-class support for dark mode. Moreover, Bootstrap now supports any number of color modes, allowing you to build your own custom themes or more nuanced color modes. Let’s take a look at how our new dark mode works first.</p>
            <p><a href="https://getbootstrap.com/docs/5.3/customize/color-modes/"><img src="/assets/img/2022/12/docs-color-modes.png" class="d-block img-fluid mb-2 rounded border" alt="New homepage" width="2880" height="1800" loading="lazy">
                </a></p>
            <p><strong>Bootstrap’s new dark mode is opt-in by default</strong>, meaning you’ll need to set a <code>data-bs-theme</code> attribute on the root <code>&lt;html&gt;</code> element to change the entire page’s design. <em>This was done to best support custom color modes beyond light and dark—more on that later. It also helps folks who aren’t ready for dark mode in their own designs.</em></p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="cp">&lt;!doctype html&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">html</span> <span class="na">lang</span><span class="o">=</span><span class="s">"en"</span> <span class="na">data-bs-theme</span><span class="o">=</span><span class="s">"dark"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="c">&lt;!-- ... --&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">html</span><span class="p">&gt;</span>
</span></span></code></pre>
                </div>
            </div>
            <p>Need a more isolated dark mode? You can also set the color mode on a parent element like the <code>.dropdown</code> shown below. This will only affect the dropdown and its children instead of the entire page.</p>
            <!-- markdownlint-disable no-inline-html -->
            <div class="bd-example-snippet bd-code-snippet">
                <div class="bd-example m-0 border-0 d-flex justify-content-between">

                    <div class="dropdown" data-bs-theme="light">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonLight" data-bs-toggle="dropdown" aria-expanded="false">
                            Default dropdown
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonLight">
                            <li><a class="dropdown-item active" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <div class="dropdown" data-bs-theme="dark">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButtonDark" data-bs-toggle="dropdown" aria-expanded="false">
                            Dark dropdown
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButtonDark">
                            <li><a class="dropdown-item active" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>

                </div>
                <div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-0 border-top border-bottom">
                    <small class="font-monospace text-body-secondary text-uppercase">html</small>
                    <div class="d-flex ms-auto">

                        <button type="button" class="btn-clipboard mt-0 me-0" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard">
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#clipboard"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown"</span> <span class="na">data-bs-theme</span><span class="o">=</span><span class="s">"light"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">id</span><span class="o">=</span><span class="s">"dropdownMenuButtonLight"</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">"false"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    Default dropdown
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">"dropdownMenuButtonLight"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-item active"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-item"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-item"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Another action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-item"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Something else here<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">hr</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-divider"</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-item"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Separated link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown"</span> <span class="na">data-bs-theme</span><span class="o">=</span><span class="s">"dark"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">button</span> <span class="na">class</span><span class="o">=</span><span class="s">"btn btn-secondary dropdown-toggle"</span> <span class="na">type</span><span class="o">=</span><span class="s">"button"</span> <span class="na">id</span><span class="o">=</span><span class="s">"dropdownMenuButtonDark"</span> <span class="na">data-bs-toggle</span><span class="o">=</span><span class="s">"dropdown"</span> <span class="na">aria-expanded</span><span class="o">=</span><span class="s">"false"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    Dark dropdown
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">button</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-menu"</span> <span class="na">aria-labelledby</span><span class="o">=</span><span class="s">"dropdownMenuButtonDark"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-item active"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-item"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-item"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Another action<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-item"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Something else here<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">hr</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-divider"</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">li</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"dropdown-item"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Separated link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span></span></span></code></pre>
                </div>
            </div>

            <!-- markdownlint-enable no-inline-html -->
            <h3 id="new-color-mode-mixin">New <code>color-mode()</code> mixin</h3>
            <p>Dark mode styles are written with and generated through the new <a href="https://getbootstrap.com/docs/5.3/customize/color-modes/#building-with-sass"><code>color-mode()</code> Sass mixin</a>. The mixin allows you to write styles specific to a particular color mode, like dark mode.</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="k">@include</span><span class="nd"> color-mode</span><span class="p">(</span><span class="ni">dark</span><span class="p">)</span> <span class="p">{</span>
</span></span><span class="line"><span class="cl">  <span class="nc">.element</span> <span class="p">{</span>
</span></span><span class="line"><span class="cl">    <span class="na">color</span><span class="o">:</span> <span class="nf">var</span><span class="p">(</span><span class="o">--</span><span class="n">bs-primary-text-emphasis</span><span class="p">);</span>
</span></span><span class="line"><span class="cl">    <span class="na">background-color</span><span class="o">:</span> <span class="nf">var</span><span class="p">(</span><span class="o">--</span><span class="n">bs-primary-bg-subtle</span><span class="p">);</span>
</span></span><span class="line"><span class="cl">  <span class="p">}</span>
</span></span><span class="line"><span class="cl"><span class="p">}</span>
</span></span></code></pre>
                </div>
            </div>
            <p>Together with the new <code>$color-mode-type</code> Sass variable, you can also change how color modes behave in Bootstrap. The default value is <code>data</code>, which tells Bootstrap to generate CSS selectors that scope the color mode’s styles to the <code>data</code> attributes you’ve seen above.</p>
            <p>The other supported value is <code>media-query</code>, which generates media query selectors instead. This is helpful for those who want light and dark modes, automatically, and without a user override.</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="nv">$color-mode-type</span><span class="o">:</span> <span class="n">media-query</span><span class="p">;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="k">@include</span><span class="nd"> color-mode</span><span class="p">(</span><span class="ni">dark</span><span class="p">)</span> <span class="p">{</span>
</span></span><span class="line"><span class="cl">  <span class="nc">.element</span> <span class="p">{</span>
</span></span><span class="line"><span class="cl">    <span class="na">color</span><span class="o">:</span> <span class="nf">var</span><span class="p">(</span><span class="o">--</span><span class="n">bs-primary-text-emphasis</span><span class="p">);</span>
</span></span><span class="line"><span class="cl">    <span class="na">background-color</span><span class="o">:</span> <span class="nf">var</span><span class="p">(</span><span class="o">--</span><span class="n">bs-primary-bg-subtle</span><span class="p">);</span>
</span></span><span class="line"><span class="cl">  <span class="p">}</span>
</span></span><span class="line"><span class="cl"><span class="p">}</span>
</span></span></code></pre>
                </div>
            </div>
            <p>Which outputs to:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-css" data-lang="css"><span class="line"><span class="cl"><span class="p">@</span><span class="k">media</span> <span class="o">(</span><span class="nt">prefers-color-scheme</span><span class="o">:</span> <span class="nt">dark</span><span class="o">)</span> <span class="p">{</span>
</span></span><span class="line"><span class="cl">  <span class="p">.</span><span class="nc">element</span> <span class="p">{</span>
</span></span><span class="line"><span class="cl">    <span class="k">color</span><span class="p">:</span> <span class="nf">var</span><span class="p">(</span><span class="o">--</span><span class="n">bs</span><span class="o">-</span><span class="n">primary</span><span class="o">-</span><span class="kc">text</span><span class="o">-</span><span class="n">emphasis</span><span class="p">);</span>
</span></span><span class="line"><span class="cl">    <span class="k">background-color</span><span class="p">:</span> <span class="nf">var</span><span class="p">(</span><span class="o">--</span><span class="n">bs</span><span class="o">-</span><span class="n">primary</span><span class="o">-</span><span class="n">bg</span><span class="o">-</span><span class="n">subtle</span><span class="p">);</span>
</span></span><span class="line"><span class="cl">  <span class="p">}</span>
</span></span><span class="line"><span class="cl"><span class="p">}</span>
</span></span></code></pre>
                </div>
            </div>
            <p><a href="https://getbootstrap.com/docs/5.3/customize/color-modes/#building-with-sass">Read the new color mode docs</a> to learn more.</p>
            <h3 id="toggling-color-modes">Toggling color modes</h3>
            <p>While we haven’t written a new JavaScript plugin for toggling color modes, we’ve written a great script for <a href="https://getbootstrap.com/docs/5.3/customize/color-modes/#javascript">toggling color modes via <code>data-bs-theme</code></a> in our docs. Our implementation defaults to a user’s operating system color mode (auto), but also allows users to override that with a particular mode (light or dark) that’s recorded in local storage for easy reference on future page loads. You can use and adapt this script as needed.</p>
            <h3 id="new-color-mode-variables">New color mode variables</h3>
            <p>There’s also a new <code>_variables-dark.scss</code> stylesheet that houses dark mode-specific Sass variables. This is where we modify mostly global values, and some component-specific values, for dark mode. We recommend creating separate Sass stylesheets for additional custom color modes (e.g., a blue theme might have <code>_variables-blue.scss</code>). <em>We expect this stylesheet to be simplified in our next major release as we continue to streamline the code base.</em>)</p>
            <p>Dark mode colors are all derived from our theme colors, meaning you can easily change the color mode palettes by updating the original theme colors. This means we’re not using our already tinted and shaded colors (e.g., <code>shade-color($danger, 60%)</code> instead of <code>red-800</code> for the new danger emphasis color).</p>
            <p>Bootstrap v5.3.0 ships with dark mode enabled, but you can also disable it by updating the boolean <code>$enable-dark-mode</code> Sass variable.</p>
            <p><a href="https://getbootstrap.com/docs/5.3/customize/color-modes/">Read more in the new color mode docs.</a></p>
            <h3 id="enabling-dark-mode">Enabling dark mode</h3>
            <p>If you’re using the CDN or starter template, using the new color modes is straightforward. Add the <code>data-bs-theme</code> attribute with <code>light</code> or <code>dark</code> values to the <code>&lt;html&gt;</code> element and you’ll be using either the light or dark theme.</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="cp">&lt;!doctype html&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">html</span> <span class="na">lang</span><span class="o">=</span><span class="s">"en"</span> <span class="na">data-bs-theme</span><span class="o">=</span><span class="s">"dark"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">head</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">meta</span> <span class="na">charset</span><span class="o">=</span><span class="s">"utf-8"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">meta</span> <span class="na">name</span><span class="o">=</span><span class="s">"viewport"</span> <span class="na">content</span><span class="o">=</span><span class="s">"width=device-width, initial-scale=1"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">title</span><span class="p">&gt;</span>Bootstrap demo<span class="p">&lt;/</span><span class="nt">title</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">link</span> <span class="na">href</span><span class="o">=</span><span class="s">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"</span> <span class="na">rel</span><span class="o">=</span><span class="s">"stylesheet"</span> <span class="na">integrity</span><span class="o">=</span><span class="s">"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"</span> <span class="na">crossorigin</span><span class="o">=</span><span class="s">"anonymous"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">head</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">body</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">h1</span><span class="p">&gt;</span>Hello, world!<span class="p">&lt;/</span><span class="nt">h1</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">script</span> <span class="na">src</span><span class="o">=</span><span class="s">"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"</span> <span class="na">integrity</span><span class="o">=</span><span class="s">"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"</span> <span class="na">crossorigin</span><span class="o">=</span><span class="s">"anonymous"</span><span class="p">&gt;&lt;/</span><span class="nt">script</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">body</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">html</span><span class="p">&gt;</span>
</span></span></code></pre>
                </div>
            </div>
            <h2 id="custom-color-modes">Custom color modes</h2>
            <p>When we set out to add dark mode support to Bootstrap, we didn’t want to just add a dark mode. We wanted to build the foundations for a color mode system that could be used to create any number of themes and color modes. That’s why we lead with the <code>data-bs-theme</code> attribute and the new <code>color-mode()</code> Sass mixin, and why we’ve added so many new CSS variables in these latest releases.</p>
            <p>To add a custom color mode, create your own <code>data-bs-theme</code> selector with a custom value as the name of your color mode, then modify any Sass and CSS variables as needed. We created a separate <code>_variables-dark.scss</code> stylesheet to house Bootstrap’s dark mode-specific Sass variables, but that’s not required for you.</p>
            <p>For example, you can create a “blue theme” with the selector <code>data-bs-theme="blue"</code>. In your custom Sass or CSS file, add the new selector and override any global or component CSS variables as needed. If you’re using Sass, you can also use Sass’s functions within your CSS variable overrides.</p>
            <p><em>Heads up! Applying color modes to elements that aren’t the <code>&lt;html&gt;</code> or <code>&lt;body&gt;</code> elements requires classes like <code>.text-body</code> and <code>.bg-body</code>. This is because many HTML elements have no set <code>color</code> or <code>background</code> to style until you add them yourself. We’ve included them here for you just in case.</em></p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-scss" data-lang="scss"><span class="line"><span class="cl"><span class="o">[</span><span class="nt">data-bs-theme</span><span class="o">=</span><span class="s2">"blue"</span><span class="o">]</span> <span class="p">{</span>
</span></span><span class="line"><span class="cl">  <span class="c1">// CSS variable overrides and styles
</span></span></span><span class="line"><span class="cl"><span class="c1"></span><span class="p">}</span>
</span></span></code></pre>
                </div>
            </div>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">div</span> <span class="na">data-bs-theme</span><span class="o">=</span><span class="s">"blue"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  ...
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">div</span><span class="p">&gt;</span>
</span></span></code></pre>
                </div>
            </div>
            <h2 id="refreshed-color-palette">Refreshed color palette</h2>
            <p>We’ve revamped our color palette to include all new Sass variables, CSS variables, and utilities for setting <code>color</code>, <code>background-color</code>, and <code>border-color</code>. Our foreground and background colors have been expanded to include new secondary, tertiary, and emphasis colors, while our theme colors have been expanded on to include their subtle background colors, subtle border colors, and darker text colors.</p>
            <p><a href="https://getbootstrap.com/docs/5.3/customize/color/#colors">Check out the new colors docs.</a></p>
            <p>We’ve rebuilt some components (like list groups and alerts) to use these new variables in their source Sass and compiled CSS so that they respond to the color mode changes.</p>
            <!-- markdownlint-disable no-inline-html -->
            <div class="d-flex gap-3">
                <a href="https://getbootstrap.com/docs/5.3/customize/color/">
                    <img src="/assets/img/2023/05/colors-light-mode.png" alt="New colors in light mode" class="rounded-2 img-thumbnail" loading="lazy" width="1610" height="5778">
                </a>
                <a href="https://getbootstrap.com/docs/5.3/customize/color/">
                    <img src="/assets/img/2023/05/colors-dark-mode.png" alt="New colors in dark mode" class="rounded-2 img-thumbnail" loading="lazy" width="1610" height="5778">
                </a>
            </div>
            <!-- markdownlint-enable no-inline-html -->
            <h2 id="new-link-helpers-and-utilities">New link helpers and utilities</h2>
            <p>Link styling has infinitely better in v5.3.0 with a slew of all-new link helpers and utilities. First up, we’ve added styles to place icons like <a href="https://icons.getbootstrap.com">Bootstrap Icons</a> alongside links with <a href="https://getbootstrap.com/docs/5.3/helpers/icon-link/">the new icon link helper</a>.</p>
            <!-- markdownlint-disable no-inline-html -->
            <div class="bd-example-snippet bd-code-snippet">
                <div class="bd-example m-0 border-0">

                    <a class="icon-link" href="#">
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#archive"></use>
                        </svg>
                        Icon link
                    </a>

                </div>
                <div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-0 border-top border-bottom">
                    <small class="font-monospace text-body-secondary text-uppercase">html</small>
                    <div class="d-flex ms-auto">

                        <button type="button" class="btn-clipboard mt-0 me-0" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard">
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#clipboard"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"icon-link"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">svg</span> <span class="na">class</span><span class="o">=</span><span class="s">"bi"</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">"true"</span><span class="p">&gt;&lt;</span><span class="nt">use</span> <span class="na">xlink:href</span><span class="o">=</span><span class="s">"#archive"</span><span class="p">&gt;&lt;/</span><span class="nt">use</span><span class="p">&gt;&lt;/</span><span class="nt">svg</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  Icon link
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span></span></span></code></pre>
                </div>
            </div>

            <div class="bd-example-snippet bd-code-snippet">
                <div class="bd-example m-0 border-0">

                    <a class="icon-link" href="#">
                        Icon link
                        <svg class="bi" aria-hidden="true">
                            <use xlink:href="#arrow-right-short"></use>
                        </svg>
                    </a>

                </div>
                <div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-0 border-top border-bottom">
                    <small class="font-monospace text-body-secondary text-uppercase">html</small>
                    <div class="d-flex ms-auto">

                        <button type="button" class="btn-clipboard mt-0 me-0" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard">
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#clipboard"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"icon-link"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  Icon link
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">svg</span> <span class="na">class</span><span class="o">=</span><span class="s">"bi"</span> <span class="na">aria-hidden</span><span class="o">=</span><span class="s">"true"</span><span class="p">&gt;&lt;</span><span class="nt">use</span> <span class="na">xlink:href</span><span class="o">=</span><span class="s">"#arrow-right-short"</span><span class="p">&gt;&lt;/</span><span class="nt">use</span><span class="p">&gt;&lt;/</span><span class="nt">svg</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span></span></span></code></pre>
                </div>
            </div>

            <!-- markdownlint-enable no-inline-html -->
            <p>Our other new helper is a <a href="https://getbootstrap.com/docs/5.3/helpers/focus-ring/">new focus ring helper</a> for removing the default <code>outline</code> and setting a custom <code>box-shadow</code> focus ring.</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span> <span class="na">class</span><span class="o">=</span><span class="s">"d-inline-flex focus-ring py-1 px-2 text-decoration-none border rounded-2"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  Custom focus ring
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
</span></span></code></pre>
                </div>
            </div>
            <p>On the utilities side, we have new classes for setting link color opacity, underline offset, underline color, and underline opacity. <a href="https://getbootstrap.com/docs/5.3/utilities/link/">Explore the new links utilities.</a></p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"link-opacity-10"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Link opacity 10<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"link-opacity-25"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Link opacity 25<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"link-opacity-50"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Link opacity 50<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"link-opacity-75"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Link opacity 75<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"link-opacity-100"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Link opacity 100<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span></code></pre>
                </div>
            </div>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Default link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"link-offset-1"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Offset 1 link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"link-offset-2"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Offset 2 link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"link-offset-3"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Offset 3 link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">
</span></span><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span> <span class="na">class</span><span class="o">=</span><span class="s">"link-success link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"</span><span class="p">&gt;</span>Custom link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span></code></pre>
                </div>
            </div>
            <p>Lastly, we’ve added a new <code>.link-body-emphasis</code> helper alongside our <a href="https://getbootstrap.com/docs/5.3/helpers/colored-links/">colored links</a>. This creates a colored link using our color mode responsive emphasis color.</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">p</span><span class="p">&gt;&lt;</span><span class="nt">a</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span> <span class="na">class</span><span class="o">=</span><span class="s">"link-body-emphasis link-offset-2 link-underline-opacity-25 link-underline-opacity-75-hover"</span><span class="p">&gt;</span>Emphasis link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;&lt;/</span><span class="nt">p</span><span class="p">&gt;</span>
</span></span></code></pre>
                </div>
            </div>
            <h2 id="new-nav-underline">New nav underline</h2>
            <p>There’s a new <code>.nav</code> variant and modifier class with <code>.nav-underline</code>. Add <code>.nav-underline</code> to a <code>.nav</code> to get a simpler bottom border under the active nav link. <a href="https://getbootstrap.com/docs/5.3/components/navs-tabs/#underline">See the docs for an example.</a></p>
            <!-- markdownlint-disable no-inline-html -->
            <div class="bd-example-snippet bd-code-snippet">
                <div class="bd-example m-0 border-0">

                    <ul class="nav nav-underline">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>

                </div>
                <div class="d-flex align-items-center highlight-toolbar ps-3 pe-2 py-1 border-0 border-top border-bottom">
                    <small class="font-monospace text-body-secondary text-uppercase">html</small>
                    <div class="d-flex ms-auto">

                        <button type="button" class="btn-clipboard mt-0 me-0" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard">
                            <svg class="bi" aria-hidden="true">
                                <use xlink:href="#clipboard"></use>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-html" data-lang="html"><span class="line"><span class="cl"><span class="p">&lt;</span><span class="nt">ul</span> <span class="na">class</span><span class="o">=</span><span class="s">"nav nav-underline"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"nav-item"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"nav-link active"</span> <span class="na">aria-current</span><span class="o">=</span><span class="s">"page"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Active<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"nav-item"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"nav-link"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"nav-item"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"nav-link"</span> <span class="na">href</span><span class="o">=</span><span class="s">"#"</span><span class="p">&gt;</span>Link<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;</span><span class="nt">li</span> <span class="na">class</span><span class="o">=</span><span class="s">"nav-item"</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">    <span class="p">&lt;</span><span class="nt">a</span> <span class="na">class</span><span class="o">=</span><span class="s">"nav-link disabled"</span><span class="p">&gt;</span>Disabled<span class="p">&lt;/</span><span class="nt">a</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl">  <span class="p">&lt;/</span><span class="nt">li</span><span class="p">&gt;</span>
</span></span><span class="line"><span class="cl"><span class="p">&lt;/</span><span class="nt">ul</span><span class="p">&gt;</span></span></span></code></pre>
                </div>
            </div>

            <!-- markdownlint-enable no-inline-html -->
            <h2 id="and-much-more">And much more!</h2>
            <p>Beyond all the color mode updates, new helpers, and new utilities, we have a ton of other quality-of-life updates in this release. Here’s a quick rundown of the highlights:</p>
            <ul>
                <li>
                    <p>Navs now have new <code>:focus-visible</code> styles that better match our custom button focus styles.</p>
                </li>
                <li>
                    <p>CSS variable-based <code>border-width</code> utilities have been reverted to set their property directly (as was done before v5.2.0). This avoids inheritance issues across nested elements, including tables.</p>
                </li>
                <li>
                    <p>Added new <code>.border-black</code> utility to match our <code>.text-black</code> and <code>.bg-black</code> utilities.</p>
                </li>
                <li>
                    <p>Deprecated the <code>.text-muted</code> utility and <code>$text-muted</code> Sass variable. It’s been replaced by <code>.text-body-secondary</code> and <code>$body-secondary-color</code>.</p>
                </li>
                <li>
                    <p>Added a check for interpolated variables to catch compilation errors with Node Sass when using Sass variables in <code>calc()</code> functions.</p>
                </li>
                <li>
                    <p>Started using <code>--bs-border-radius</code> variables across more components.</p>
                </li>
                <li>
                    <p>Added <code>.d-inline-grid</code> utility class.</p>
                </li>
                <li>
                    <p>Fixed <code>.tooltip-inner</code> placement when using variations in <code>fallbackPlacements</code>.</p>
                </li>
                <li>
                    <p>Fix selectors for dark mode carousel overrides when compiling with <code>$color-mode-type: media-query</code>.</p>
                </li>
                <li>
                    <p>Updated the styling of floating labels when “floated” to include a <code>background-color</code> to help with multiple lines of text in <code>textarea</code>s. This also fixes the colors when form elements are disabled in floating forms.</p>
                </li>
                <li>
                    <p>Updated RFS to v10.0.0.</p>
                </li>
            </ul>
            <h2 id="next-up">Next up</h2>
            <p>We’ll be shipping some patch releases for v5.3.x in the coming weeks to address any issues that come up. We’ll also be working on v5.4.0, which will primarily focus on improvements to our utilities API and related code. Stay tuned for more updates on that front!</p>
            <h2 id="migrating-from-earlier-alphas">Migrating from earlier alphas</h2>
            <p>Have a read through the <a href="https://getbootstrap.com/docs/5.3/migration/#v530-alpha1">Migration guide</a> for the first alpha, or <a href="/2022/12/24/bootstrap-5-3-0-alpha1/">the blog post for the release announcement</a>, if you’re just getting into v5.3.0.</p>
            <h2 id="get-the-release">Get the release</h2>
            <p><strong>Head to <a href="https://getbootstrap.com">https://getbootstrap.com</a> for the latest.</strong> It’s also been pushed to npm:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-sh" data-lang="sh"><span class="line"><span class="cl">npm i bootstrap@v5.3.0
</span></span></code></pre>
                </div>
            </div>
            <p><a href="https://github.com/twbs/bootstrap/releases/tag/v5.3.0">Read the GitHub v5.3.0 changelog</a> for a complete list of changes in this release.</p>
            <h2 id="support-the-team">Support the team</h2>
            <p>Visit our <a href="https://opencollective.com/bootstrap">Open Collective page</a> or our <a href="https://github.com/orgs/twbs/people">team members</a>’ GitHub profiles to help support the maintainers contributing to Bootstrap.</p>

        </div>
        <div class="post">
            <h1 class="post-title fw-semibold">
                <a href="/2023/04/03/bootstrap-5-3-0-alpha3/" class="text-decoration-none">Bootstrap 5.3.0-alpha3</a>
            </h1>

            <div class="d-flex align-items-center mb-4 text-muted author-info">
                <a class="d-flex align-items-center text-muted text-decoration-none" href="https://github.com/mdo" target="_blank" rel="noopener">
                    <img class="mb-0 me-2 rounded-2" srcset="https://github.com/mdo.png?size=32, https://github.com/mdo.png?size=64 2x" src="https://github.com/mdo.png?size=32" alt="" loading="lazy" width="32" height="32">
                    <span>@mdo</span>
                </a>
                <span class="d-flex align-items-center ms-3" title="03 Apr 23 07:35 UTC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                    </svg>
                    April 03, 2023</span>
            </div>




            <p>Hot on the heels of our second alpha, we’re releasing a third (and unexpected) alpha for v5.3.0 today with some fixes for some Node Sass compilation errors. In addition, we’ve added a handful of other updates. We’re still on target to ship our stable release soon!</p>
            <p>Once again, if you’re new to the v5.3.0 alpha releases, please read through the <a href="https://getbootstrap.com/docs/5.3/migration/#v530-alpha1">Migration guide</a> for the first alpha and last month’s <a href="https://getbootstrap.com/docs/5.3/migration/#v530-alpha2">second alpha</a>.</p>
            <p>Here’s a look at what’s changed in this quick release:</p>
            <ul>
                <li>Fixed wrong interpolated variables with node-sass/Hugo.</li>
                <li>Added a check for interpolated variables to catch compilation errors with Node Sass when using Sass variables in <code>calc()</code> functions.</li>
                <li>Started using <code>--bs-border-radius</code> variables across more components.</li>
                <li>Added <code>.d-inline-grid</code> utility class.</li>
                <li>Fixed <code>.tooltip-inner</code> placement when using variations in <code>fallbackPlacements</code>.</li>
                <li>Fix selectors for dark mode carousel overrides when compiling with <code>$color-mode-type: media-query</code>.</li>
                <li>Updated the styling of floating labels when “floated” to include a <code>background-color</code> to help with multiple lines of text in <code>textarea</code>s. This also fixes the colors when form elements are disabled in floating forms.</li>
                <li>Updated RFS to v10.0.0.</li>
            </ul>
            <h2 id="get-the-release">Get the release</h2>
            <p><strong>Head to <a href="https://getbootstrap.com">https://getbootstrap.com</a> for the latest.</strong> It’s also been pushed to npm:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-sh" data-lang="sh"><span class="line"><span class="cl">npm i bootstrap@v5.3.0-alpha3
</span></span></code></pre>
                </div>
            </div>
            <p><a href="https://github.com/twbs/bootstrap/releases/tag/v5.3.0-alpha3">Read the GitHub v5.3.0-alpha3 changelog</a> for a complete list of changes in this release.</p>
            <h2 id="support-the-team">Support the team</h2>
            <p>Visit our <a href="https://opencollective.com/bootstrap">Open Collective page</a> or our <a href="https://github.com/orgs/twbs/people">team members</a>’ GitHub profiles to help support the maintainers contributing to Bootstrap.</p>

        </div>
        <div class="post">
            <h1 class="post-title fw-semibold">
                <a href="/2023/03/24/bootstrap-5-3-0-alpha2/" class="text-decoration-none">Bootstrap 5.3.0-alpha2</a>
            </h1>

            <div class="d-flex align-items-center mb-4 text-muted author-info">
                <a class="d-flex align-items-center text-muted text-decoration-none" href="https://github.com/mdo" target="_blank" rel="noopener">
                    <img class="mb-0 me-2 rounded-2" srcset="https://github.com/mdo.png?size=32, https://github.com/mdo.png?size=64 2x" src="https://github.com/mdo.png?size=32" alt="" loading="lazy" width="32" height="32">
                    <span>@mdo</span>
                </a>
                <span class="d-flex align-items-center ms-3" title="24 Mar 23 14:40 UTC">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2" viewBox="0 0 16 16">
                        <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5z"></path>
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5M1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"></path>
                    </svg>
                    March 24, 2023</span>
            </div>




            <p>Our second alpha release of v5.3.0 has landed with a ton of enhancements and bug fixes for our new color modes! There’s still more to come, but we’ve held off shipping until we ironed out enough issues. Huzzah, we have!</p>
            <p>This v5.3.0 release is a monumental update for Bootstrap 5. It’s big enough that it could’ve been a v6 on its own, but we wanted to do right by the community and get color modes out the door without the massive major release upgrade. We’re getting super close now, so bear with us as we continue to chip away at this.</p>
            <p>And, in the meantime, here’s the rundown on what’s changed since our first alpha. Have a read through the <a href="https://getbootstrap.com/docs/5.3/migration/#v530-alpha1">Migration guide</a> for the first alpha, or <a href="/2022/12/24/bootstrap-5-3-0-alpha1/">the blog post for the release announcement</a>, if you’re just getting into v5.3.0.</p>
            <h3 id="css-variables">CSS variables</h3>
            <ul>
                <li>Removed several duplicate and unused root CSS variables.</li>
            </ul>
            <h3 id="color-modes">Color modes</h3>
            <ul>
                <li>
                    <p>Dark mode colors are now derived from our theme colors (e.g., <code>$primary</code>) in Sass, rather than color-specific tints or shades (e.g., <code>$blue-300</code>). This allows for a more automated dark mode when customizing the default theme colors.</p>
                </li>
                <li>
                    <p>Added Sass maps for generating theme colors for dark mode text, subtle background, and subtle border.</p>
                </li>
                <li>
                    <p><a href="https://getbootstrap.com/docs/5.3/examples/#snippets">Snippet examples</a> are now ready for dark mode with updated markup and reduced custom styles.</p>
                </li>
                <li>
                    <p>Added <code>color-scheme: dark</code> to dark mode CSS to change OS level controls like scrollbars</p>
                </li>
                <li>
                    <p>Form validation <code>border-color</code> and text <code>color</code> states now respond to dark mode, thanks to new Sass and CSS variables.</p>
                </li>
                <li>
                    <p>Dropped recently added form control background CSS variables and reassigned the Sass variables to use CSS variables instead. This simplifies the styling across color modes and avoids an issue where form controls in dark mode wouldn’t update properly.</p>
                </li>
                <li>
                    <p>Our <code>box-shadow</code>s will once again always stay dark instead of inverting to white when in dark mode.</p>
                </li>
                <li>
                    <p>Improved HTML and JavaScript for our color mode toggle script. The selector for changing the active SVG has been improved, and the markup made more accessible with ARIA attributes.</p>
                </li>
                <li>
                    <p>Improved docs code syntax colors and more across light and dark modes.</p>
                </li>
                <li>
                    <p>Removed the ability to nest light mode components within dark mode. This was super incomplete unfortunately and just isn’t practical without quadrupling our selectors for every component. Maybe in v6!</p>
                </li>
            </ul>
            <h3 id="typography">Typography</h3>
            <ul>
                <li>We no longer set a color for <code>$headings-color-dark</code> or <code>--bs-heading-color</code> for dark mode. To avoid several problems of headings within components appearing the wrong color, we’ve set the Sass variable to <code>null</code> and added a <code>null</code> check like we use on the default light mode.</li>
            </ul>
            <h3 id="components">Components</h3>
            <ul>
                <li>
                    <p>Cards now have a <code>color</code> set on them to improve rendering across color modes.</p>
                </li>
                <li>
                    <p>Added a new <code>.nav-underline</code> variant for our navigation with a simpler bottom border under the active nav link. <a href="https://getbootstrap.com/docs/5.3/components/navs-tabs/#underline">See the docs for an example.</a></p>
                </li>
                <li>
                    <p>Navs now have new <code>:focus-visible</code> styles that better match our custom button focus styles.</p>
                </li>
            </ul>
            <h3 id="helpers">Helpers</h3>
            <ul>
                <li>
                    <p>Added a new <code>.icon-link</code> helper to quickly place and align Bootstrap Icons alongside a textual link. Icon links support our new link utilities, too.</p>
                </li>
                <li>
                    <p>Added a new focus ring helper for removing the default <code>outline</code> and setting a custom <code>box-shadow</code> focus ring.</p>
                </li>
            </ul>
            <h3 id="utilities">Utilities</h3>
            <ul>
                <li>
                    <p>Renamed Sass and CSS variables <code>${color}-text</code> to <code>${color}-text-emphasis</code> to match their associated utilities.</p>
                </li>
                <li>
                    <p>Added new <code>.link-body-emphasis</code> helper alongside our <a href="https://getbootstrap.com/docs/5.3/helpers/colored-links/">colored links</a>. This creates a colored link using our color mode responsive emphasis color.</p>
                </li>
                <li>
                    <p>Added new link utilities for link color opacity, underline offset, underline color, and underline opacity. <a href="https://getbootstrap.com/docs/5.3/utilities/link/">Explore the new links utilities.</a></p>
                </li>
                <li>
                    <p>CSS variable-based <code>border-width</code> utilities have been reverted to set their property directly (as was done before v5.2.0). This avoids inheritance issues across nested elements, including tables.</p>
                </li>
                <li>
                    <p>Added new <code>.border-black</code> utility to match our <code>.text-black</code> and <code>.bg-black</code> utilities.</p>
                </li>
                <li>
                    <p><span class="badge text-warning-emphasis bg-warning-subtle">Deprecated</span> Deprecated the <code>.text-muted</code> utility and <code>$text-muted</code> Sass variable. It’s been replaced by <code>.text-body-secondary</code> and <code>$body-secondary-color</code>.</p>
                </li>
            </ul>
            <h3 id="docs">Docs</h3>
            <ul>
                <li>Updated docs page table of contents to use Scrollspy (shoutout to our v3 docs!).</li>
                <li>Revamped syntax highlighting colors for code snippets across color modes.</li>
                <li>Improved content and rendering of several docs callouts.</li>
                <li>Document more color mode features and usage suggestions.</li>
                <li>Added theme toggling to examples pages.</li>
                <li>Updated dependencies across the board, including in our guides.</li>
            </ul>
            <h2 id="known-issues">Known issues</h2>
            <p>While not an exhaustive list, here’s some of the stuff we’re going to be working on before calling this release stable. You can track these and more in the <a href="https://github.com/orgs/twbs/projects/18">v5.3.0-stable project on GitHub</a>.</p>
            <ul>
                <li>Add new functionality to utilities with mixins and functions.</li>
                <li>Some components need another pass at enabling full-color mode responsiveness. <em>Bear in mind, some components like buttons won’t get full-color mode adaptivity until v6.</em></li>
                <li>Labels in disabled floating forms have incorrect rendering.</li>
                <li>Docs need to be updated for modifying theme colors across color modes.</li>
                <li>Examples need another pass for dark mode support, new screenshots, and more.</li>
                <li>Improve click/tap area for range inputs.</li>
            </ul>
            <p>Up next will be the stable release of v5.3.0. Originally this was planned as a beta, but I think we’re getting close enough to call this final with one more release.</p>
            <h2 id="get-the-release">Get the release</h2>
            <p><strong>Head to <a href="https://getbootstrap.com">https://getbootstrap.com</a> for the latest.</strong> It’s also been pushed to npm:</p>
            <div class="bd-code-snippet">
                <div class="bd-clipboard"> <button type="button" class="btn-clipboard" aria-label="Copy to clipboard" data-bs-original-title="Copy to clipboard"> <svg class="bi" role="img" aria-label="Copy">
                            <use xlink:href="#clipboard"></use>
                        </svg> </button> </div>
                <div class="highlight">
                    <pre tabindex="0" class="chroma"><code class="language-sh" data-lang="sh"><span class="line"><span class="cl">npm i bootstrap@v5.3.0-alpha2
</span></span></code></pre>
                </div>
            </div>
            <p><a href="https://github.com/twbs/bootstrap/releases/tag/v5.3.0-alpha2">Read the GitHub v5.3.0-alpha2 changelog</a> for a complete list of changes in this release.</p>
            <h2 id="support-the-team">Support the team</h2>
            <p>Visit our <a href="https://opencollective.com/bootstrap">Open Collective page</a> or our <a href="https://github.com/orgs/twbs/people">team members</a>’ GitHub profiles to help support the maintainers contributing to Bootstrap.</p>

        </div>
    </div>

    <div class="pagination"><a class="pagination-item older" href="/page/2/">Older</a>
        <span class="pagination-item newer">Newer</span>
    </div>
</div>