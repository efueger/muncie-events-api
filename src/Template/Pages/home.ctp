<section class="home">
    <h1>
        Welcome
    </h1>
    <p>
        The Muncie Events API can be used to retrieve data from the <a href="https://muncieevents.com">MuncieEvents.com</a>
        database. It currently has a small number of endpoints, but if your application would benefit from more being added,
        such as an endpoint for retrieving events from a specific location or with a specific tag, feel free to contact us
        at <a href="mailto:admin@muncieevents.com">admin@muncieevents.com</a> or
        <a href="https://github.com/BallStateCBER/muncie-events-api/issues">open a new issue on GitHub</a> and request
        additional development.
    </p>
</section>

<section class="home">
    <h1>
        Starting Out
    </h1>
    <ol>
        <li>
            <?= $this->Html->link(
                'Register a Muncie Events account and log in',
                [
                    'prefix' => false,
                    'controller' => 'Users',
                    'action' => 'register'
                ]
            ) ?>
            <br />
            (if you have an account on <a href="https://muncieevents.com">the main site</a>, you can log in with those credentials here)
        </li>
        <li>
            <?= $this->Html->link(
                'Get an API key',
                [
                    'controller' => 'Users',
                    'action' => 'apiKey'
                ]
            ) ?>
        </li>
        <li>
            <?= $this->Html->link(
                'Read the docs',
                [
                    'controller' => 'Pages',
                    'action' => 'docsV1'
                ]
            ) ?>
        </li>
    </ol>
</section>

<section class="home">
    <h1>
        Notes
    </h1>

    <h3>
        Pagination
    </h3>
    <p>
        Results are limited to 50 per page. API responses include a <code>links</code> object with the URLs used
        to request the <code>first</code>, <code>last</code>, <code>prev</code>, and <code>next</code> pages.
    </p>

    <h3>
        Moderation
    </h3>
    <p>
        Only events that have been approved by a Muncie Events moderator will appear in API call results.
    </p>

    <h3>
        Rate Limit
    </h3>
    <p>
        There is not currently a limit to the rate of allowed requests to the API. If one is implemented in the future,
        API users will receive an email notifying them in advance.
    </p>

    <h3>
        Format
    </h3>
    <p>
        This API uses the <a href="http://jsonapi.org/">JSON API v1.0 specification</a>.
    </p>

    <h3>
        Problems
    </h3>
    <p>
        If you have any questions or find any errors, contact us at
        <a href="mailto:admin@muncieevents.com">admin@muncieevents.com</a> or
        <a href="https://github.com/BallStateCBER/muncie-events-api/issues">open a new issue on GitHub</a>.
    </p>
</section>
