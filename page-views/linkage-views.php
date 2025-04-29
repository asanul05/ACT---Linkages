    <section class="ero-hero">
        <div class="ero-text-cont">
            <p class="subtitle">WESTERN MINDANAO STATE UNIVERSITY’S</p>
            <h1 class="title">LINKAGES</h1>
            <h1 class="title2">& PARTNERSHPS</h1> 
        </div>
        <!-- <div class="page-visit">
            <div class="page-visit-circ"></div>
            <div class="page-visit-count"><p>16,666 Page Visits</p></div>
        </div> -->
    </section>
<a href=""></a>
    <section class="internation-exchange-program">
        <div class="iep-cont">
            <div class="circ-cont">
                <div><img src="../imgs/ero-iep-globe.png" alt=""></div>
            </div>
            <div class="iep-text-cont">
                <div>
                    <p class="iep-p">International Exchange Program</p>
                    <p class="iep-p2">Apply now for our 2025 student exchange program with partner universities worldwide.</p>
                </div>
                <div class="apply-now-cont">
                    <a href="services.php"><button class="apply-now-btn">Apply Now</button></a>
                </div>
                <!-- <div class="iep-three-dots">
                    <div class="iep-three-circ" id="circ1"></div>
                    <div class="iep-three-circ" id="circ2"></div>
                    <div class="iep-three-circ" id="circ3"></div>
                </div> -->
            </div> 
        </div>
    </section>

    <section class="our-global-network">
        <div class="ogn-text">
            <h1 class="ogn-h1">Our Global Network</h1>
            <p class="ogn-p">Our university has established strong partnerships with leading institutions across the globe, creating <br>opportunities for research collaboration, student exchange, and academic innovation.</p>
        </div>
        <div class="ogn-cont">
            <div><img src="../imgs/final-final-world-map.png" alt=""></div>
            <div class="ogn-label">
                <div class="icon-location-pin-national">
                    <img src="../imgs/icon-pin.png" alt="">
                </div>
                <div><p>Partners</p></div>
                <div class="ogn-circ-red"></div>
                <div><p>WMSU</p></div>
            </div>
        </div>
    </section>

    <section class="featured-partners">
        <div>
            <h1 class="featured-partners-h1">Featured Partnerships</h1>
        </div>
        <div class="featured-partners-cont"> 
            <div class="featured-partners-box-left">
                <div class="featured-partners-top"><img src="../imgs/ero-huawei.png" alt=""></div>
                <div class="featured-partners-bot">
                    <div class="featured-partners-bot-text1">
                        <h1>Huawei PH</h1>
                        <p id="featured-partners-p1">Taguig City, Metro Manila, Philippines</p>
                    </div>
                    
                    <div class="featured-partners-bot-text2">
                        <p id="featured-partners-p2">an exciting collaboration that typically focuses on technology development, digital skills training, and research initiatives in the field of information and communication technology (ICT). </p>
                    </div>
                
                    <!-- <div class="featured-partners-bot-text3">
                        <p id="featured-partners-p3"><b>Learn more about this partnership</b></p>
                        <img src="../imgs/ero-arrow.png" alt="">
                    </div> -->
                
                </div>
            </div>

            <div class="featured-partners-box-right">
                <div class="featured-partners-top"><img src="../imgs/ero-seamo-innotech.png" alt=""></div>
                <div class="featured-partners-bot">
                    <div class="featured-partners-bot-text1">
                        <h1>SEAMEO Innotech</h1>
                        <p id="featured-partners-p1">Quezon City, Philippines</p>
                    </div>
                    
                    <div class="featured-partners-bot-text2">
                        <p id="featured-partners-p2">a regional educational organization that aims to promote innovation in education and development across Southeast Asia.  </p>
                    </div>
                
                    <!-- <div class="featured-partners-bot-text3">
                        <p id="featured-partners-p3"><b>Learn more about this partnership</b></p>
                        <img src="../imgs/ero-arrow.png" alt="">
                    </div> -->
                
                </div>
            </div>
        </div>
    </section>

    <section class="Linkages-Gallery">
        <div class="Linkages-GalleryCont">
            <div class="Linkages-HoverableImage">
                <img class="Linkages-ImagesCarousel" src="../imgs/Admin-Office1.jpg" alt="">
                <img class="Linkages-ImagesCarousel" src="../imgs/Admin-Office2.jpg" alt="">
                <img class="Linkages-ImagesCarousel" src="../imgs/Ribbon-Cut.jpg" alt="">
                <img class="Linkages-ImagesCarousel" src="../imgs/Admin.jpg" alt="">
            </div>
        </div>
    </section>


    <?php include 'partners-counts.php'; ?>
    <section class="linkages-partnership-statistic">
        <div><h1 class="linkages-partnership-statistic-h1">Linkages & Partnership Statistics</h1></div>
        <div class="linkages-partnership-statistic-cont">

            <div class="linkages-partnership-statistic-box" data-title="International Partners" data-chart="../imgs/international-partners-chart.png">
                <div class="linkages-partnership-statistic-box-top"><img src="../imgs/ero-stat-internation-partners-img.png" alt=""></div>
                <div class="lps-icon-cont">
                    <div class="lps-icon-icon"><img src="../imgs/ero-stat-international-partners-icon.png" alt=""></div>
                </div>
                <div class="linkages-partnership-statistic-box-bot">
                    <div class="lps-h1"><h1><?php echo $internationalCount; ?></h1></div>
                    <div class="lps-p"><p>International Partners</p></div>
                </div>
            </div>

            <div class="linkages-partnership-statistic-box" data-title="Overall Partners" data-chart="../imgs/overall-partners-chart.png">
                <div class="linkages-partnership-statistic-box-top"><img src="../imgs/ero-stat-overall-partners-img.png" alt=""></div>
                <div class="lps-icon-cont">
                    <div class="lps-icon-icon"><img src="../imgs/ero-stat-overall-partners-icon.png" alt=""></div>
                </div>
                <div class="linkages-partnership-statistic-box-bot">
                    <div class="lps-h1"><h1><?php echo $overallCount; ?></h1></div>
                    <div class="lps-p"><p>Overall Partners</p></div>
                </div>
            </div>

            <div class="linkages-partnership-statistic-box" data-title="National Partners" data-chart="../imgs/national-partners-chart.png">
                <div class="linkages-partnership-statistic-box-top"><img src="../imgs/ero-stat-national-partners-img.png" alt=""></div>
                <div class="lps-icon-cont">
                    <div class="lps-icon-icon"><img src="../imgs/ero-stat-national-partners-icon.png" alt=""></div>
                </div>
                <div class="linkages-partnership-statistic-box-bot">
                    <div class="lps-h1"><h1><?php echo $nationalCount; ?></h1></div>
                    <div class="lps-p"><p>National Partners</p></div>
                </div>
            </div>
        </div>
    </section>
    
    <div id="popup" class="popup-overlay">
        <div class="popup-content">
            <span class="close-button" onclick="closePopup()">&times;</span>
            <h1 id="popup-title">Popup Title</h1>
            <div class="popup-chart">
                <img id="popup-chart" src="" alt="Popup Chart">
            </div>
        </div>
    </div>
    

    <section class="our-partners">
        <div><h1 class="our-partners-h1">Our Partners<c:\Users\Asanul\Downloads\huawei-logo.png/h1></div>
        
        <!-- Categories -->
        <div class='partners-category-subsect'>
            <div class="our-partners-category-cont">
                <button class="active" data-category="all" onclick="filterPartners('all')">All Partners</button>
                <div class="divider"></div>
                <button data-category="international" onclick="filterPartners('international')">International</button>
                <div class="divider"></div>
                <button data-category="national" onclick="filterPartners('national')">National</button>
            </div>
        </div>
        

        <!-- Search -->
        <div class='search-subsect'>
            <div class="search-container-and-icon">
                <div class='search-icon'><img src="../imgs/icon-search.png" alt=""></div>
                <div class="search-container">
                    <input type="text" id="search-input" class="search-input" placeholder="Search partners by name or country..." onkeyup="searchPartners()">
                </div>
            </div>
            <div>
                <button class='search-partner-button'>Search</button>
            </div>
        </div>
        
        <!-- Filters -->
        <div class="filter-section">
            <div class="filter-by">
                <img src="../imgs/icon-filter.png" alt="Filter Icon">
                <span>Filter By:</span>
            </div>
            <div class="filter-dropdowns">
                <select id="filter-type" class="filter-dropdown" onchange="filterPartnersByType()">
                    <option value="all">All Types</option>
                    <option value="international">International</option>
                    <option value="national">National</option>
                </select>
                <select id="filter-region" class="filter-dropdown" onchange="filterPartnersByRegion()">
                    <option value="all">All Regions</option>
                    <option value="asia">Asia</option>
                    <option value="europe">Europe</option>
                    <option value="america">America</option>
                </select>
            </div>
        </div>
        

        <!-- Partners Grid -->
        <div class="partners-grid" id="partners-grid">
            <?php
            $conn = new mysqli("localhost", "root", "", "linkages");

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            //Pagination variables
            $limit = 12; // 3 columns x 4 rows
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
            $offset = ($page - 1) * $limit;

            // Fetch partners
            $query = "SELECT * FROM partners LIMIT $limit OFFSET $offset";
            $result = $conn->query($query);

            //Render partners
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                        echo '<div class="partner-card" data-id="' . $row['id'] . '">';
                        echo '<img src="../imgs/' . $row['logo'] . '" alt="' . htmlspecialchars($row['name']) . '">';
                        echo '<div class="partner-card-content">';
                            echo '<h3>' . htmlspecialchars($row['name']) . '</h3>';
                            echo '<p>' . htmlspecialchars($row['location']) . '</p>';
                            echo '<span class="partner-type ' . htmlspecialchars($row['type']) . '">' . ucfirst(htmlspecialchars($row['type'])) . '</span>';
                        echo '</div>';
                        echo '</div>';
                }
                
            } else {
                echo '<p>No partners found.</p>';
            }

            $conn->close();
            ?>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php
            $conn = new mysqli("localhost", "root", "", "linkages");

            // Fetch total number of partners
            $totalQuery = "SELECT COUNT(*) AS total FROM partners";
            $totalResult = $conn->query($totalQuery);
            $totalRow = $totalResult->fetch_assoc();
            $totalPages = ceil($totalRow['total'] / $limit);

            // Previous Arrow
            echo '<button class="page-button" onclick="loadPage(' . max(1, $page - 1) . ')">&lt;</button>';

            // Page Numbers
            for ($i = 1; $i <= $totalPages; $i++) {
                echo '<button class="page-button ' . ($i == $page ? 'active' : '') . '" onclick="loadPage(' . $i . ')">' . $i . '</button>';
            }

            // Next Arrow
            echo '<button class="page-button" onclick="loadPage(' . min($totalPages, $page + 1) . ')">&gt;</button>';

            $conn->close();
            ?>
        </div>
        
    </section>

    <div id="partner-popup" class="popup-overlay">
        <div class="popup-content">
            <span class="close-button" onclick="closePartnerPopup()">&times;</span>
            <div id="popup-content">
                <!-- Dynamic content will be loaded here -->
            </div>
        </div>
    </div>


    <section class="become-a-partner">
        <div class="become-a-partner-container">
            <div class="partner-left">
                <div><h1 class="director-title">ELIRO</h1></div>
                <div><h2 class="director-name">DR. MARIO R. OBRA JR.</h2></div>
                <div><p class="director-role">Director, Quality Management Office,<br> International Relations Office & External Linkages</p></div>
                <div class="director-img"><img src="../imgs/sir-mario.png" alt=""></div>
            </div>

            <div class="partner-right">
                <div><h2 class="become-partner-heading">Become a Partner</h2></div>
                <div><p class="become-partner-description">Interested in establishing a partnership with our <br> university? We're always looking to expand our <br>network of collaborators.</p></div>
                <button class="become-partner-button">Learn More About ELIRO</button>
                <div class="icon-left-quote"><img src="../imgs/icon-left-quote.png" alt=""></div>
                <div class="icon-right-quote"><img src="../imgs/icon-right-quote.png" alt=""></div>
            </div>
        </div>
    </section>

    <div id="contact-popup" class="popup-overlay">
        <div class="popup-content contact-popup-content">
            <span class="close-button" onclick="closeContactPopup()">&times;</span>
            <h1>External Linkages and International Relations Office (ELIRO)</h1>
            <p>
                The <b>External Linkages and International Relations Office (ELIRO)</b> is mandated to establish partnerships with agencies, industries, and objectives of the Western Mindanao State University (WMSU) as a “Smart Research University by 2040”. Moreover, the office provides a platform for exploratory discussions on all possible areas of collaboration, tie-up programs, twinning project undertakings, and other linkage arrangements between WMSU and other related agencies at the local, national, and international level established through a Memorandum of Understanding and/or Agreement.
            </p>
            <h2>Office Organization Chart</h2>
            <div class="popup-chart">
                <img src="../imgs/ero-org-chart-placeholder.png" alt="Office Organization Chart">
            </div>
            <a href="ExternalRelationsOffice.php"><button class="contact-office-button">Contact The ELIRO Office</button></a>
        </div>
    </div>