<?php get_header()?>


<section class="content">
    <div class="container">
        <div class="search__title">
            <h1>Search: <?php echo get_search_query()?></h1>
        </div>
        <div class="content__wrapper">
        <div class="content_left">
            <?php
            $searchItem = get_search_query();
            $current_tag = single_tag_title("",false);
            $category = get_the_category();

            $args = array(
                'post_type' => 'post',
                'post_per_page' => -1,
                's' => $searchItem, $current_tag,
            );
            $newQuery = new WP_Query($args)
            ?>
            <?php if (!empty($searchItem)){?>

                <?php if($newQuery->have_posts()) : while ($newQuery->have_posts()) : $newQuery->the_post();?>

            <div class="context">
                <a href=""><h1><?php the_title()?> </h1></a>
                <p><?php the_content()?><a href="">read more</a></p>
            </div>
            <?php
            
            endwhile;
            else:
            echo "no available post";
            endif;
                wp_reset_postdata();
            ?>
            <?php } else {
                echo "no available content yet";
            }

            ?>
            <!-- <div class="context">
                <a href=""><h1> Tax saving measures that can be done at the end of 2022</h1></a>
                <p>For individual or corporate business owners who will close in December, here is an example of tax planning for SMEs and sole proprietorships. <a href="">read more</a></p>
            </div>
            <div class="context">
                <a href=""><h1> Understanding the difference between employees and contractors
</h1></a>
                <p>It is important for a company to hire people to help with work, whether to hire them as employees or to conclude a contract as a subcontractor.  <a href="">read more</a></p>
            </div>
            <div class="context">
                <a href=""><h1>Penalty provisions for tax returns</h1></a>
                <p>Tax filing procedures are an obligation for people with income above a certain level, and for corporations regardless of income. Tax returns are due on April 15th for individuals and three and a half months after the end of the fiscal year for corporations (two and a half months after the fiscal year ends in June). <a href="">read more</a></p>
            </div>
            <div class="context">
                <a href=""><h1>Travel Expenses for Business Trips (Part 2)</h1></a>
                <p>4. Business travel expenses this time as well as last time (1 to 4 in the table of contents below). This is about business trip expenses in Japan and other countries.
Last time, we introduced business travel expenses in the United States, but this time we will introduce business trip expenses overseas. (Part 2) <a href="">read more</a></p>
            </div>
            <div class="context">
                <a href=""><h1>Personal Tax Return ~Common Misconceptions~</h1></a>
                <p>In order not to inadvertently receive penalties from the IRS or the state due to our own misunderstandings and assumptions, I think it would be good for us to have some knowledge of how taxes work. This time, we have prepared a collection of common misconceptions about individual tax returns. <a href="">read more</a></p>
            </div>
            <div class="context">
                <a href=""><h1>Obligation to disclose foreign financial account information</h1></a>
                <p>Do you have a savings account in a country other than the United States, i.e. outside the United States? In fact, those who meet certain conditions are obliged to report on the information. As a matter of course, if the IRS finds out that you did not declare it, you will be penalized, so be careful. <a href="">read more</a></p>
            </div>
            <div class="context">
                <a href=""><h1>Tax return preparation information that is advantageous to know</h1></a>
                <p>By the way, in this month's newsletter, I hope to provide useful information for creating a tax return for 2021.<a href="">read more</a></p>
            </div>
            <div class="context">
                <a href=""><h1>About Credit - Company Health Check</h1></a>
                <p>Among corporate activities, operations related to the management and collection of accounts receivable are considered to be particularly important. account. Receivables is a general term for all accounts receivable other than those for which the terms and conditions of repayment are confirmed in writing by a note (promissory note) etc.<a href="">read more</a></p>
            </div> -->
            

            </div>
            <div class="content_right">
                <div class="sidebar">
                    <div class="recent_post">
                    <h3>Recent Post</h3>
                    </div>
                    <div class="side_bar_content">
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="">
                        <h1>Outline of the revision of the Japan-U.s.tax treaty</h1>
                        <p>On August 30, 2019, the instruments of ratification pertaining to the protocol amending the Japan-U.S. tax treaty were exchanged and entered into force. </p>
                    </a>
                    </div>
                    <div class="side_bar_content">
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="">
                        <h1>depreciation of a car used for business</h1>
                        <p>This question is well received. In this regard, the actual cost of the vehicle will be divided between "personal use" and "business use" by the number of miles traveled.</p>
                    </a>
                    </div>
                    <div class="side_bar_content">
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="">
                        <h1>Tax rate for 2022</h1>
                        <p>The income tax rate for 2022 is as follows. Filing is required federally and in the state of residence or income.</p>
                    </a>
                    </div>
                    <div class="side_bar_content">
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="">
                        <h1>Regarding Section 965 of the Internal Revenue Code “Transition tax on territorial taxation”</h1>
                        <p>This tax reform was enacted on December 22, 2017. A tax rule that significantly broadens the scope of the tax provisions (Sub Part F Income) for certain income of traditional non-U.S. corporations. The gist is as follows. </p>
                    </a>
                    </div>
                    <div class="side_bar_content">
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="">
                        <h1>What is transfer pricing?</h1>
                        <p>Part 1: What is the Transfer Pricing Issue?</p>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>

