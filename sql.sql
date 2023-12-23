CREATE TABLE `gender`(
  `g_id` int(255) NOT NULL AUTO_INCREMENT,
  `g_name` varchar(255) NOT NULL DEFAULT 0,
  `gt` time NOT NULL DEFAULT current_timestamp(),
  `gd` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY(`g_id`)
);
CREATE TABLE `ward`(
  `w_id` int(255) NOT NULL  AUTO_INCREMENT,
  `w_name` varchar(255) NOT NULL DEFAULT 0,
  `wt` time NOT NULL DEFAULT current_timestamp(),
  `dd` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY(`w_id`)
);
CREATE TABLE `grant`(
  `gt_id` int(255) NOT NULL  AUTO_INCREMENT,
  `gt_name` varchar(255) NOT NULL DEFAULT 0,
  `gtt` time NOT NULL DEFAULT current_timestamp(),
  `gtd` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY(`gt_id`)
);
CREATE TABLE `cdf`(
  `id` int(255) NOT NULL  AUTO_INCREMENT,
  `fname` VARCHAR(30) NOT NULL DEFAULT 0,
  `sname` VARCHAR(30) NOT NULL DEFAULT 0,
  `email` VARCHAR(30) NOT NULL DEFAULT 0,
  `g_id` INT(3) NOT NULL,
  `gt_id` INT(3) NOT NULL,
  `address` VARCHAR(50) NOT NULL DEFAULT 0,
  `dst` VARCHAR(50) NOT NULL DEFAULT 'mwense',
  `cdate` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY(`id`),
  FOREIGN KEY (`g_id`) REFERENCES `gender`(`g_id`) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (`gt_id`) REFERENCES `grant`(`gt_id`) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE `files`(
  `fl_id` int(255) NOT NULL  AUTO_INCREMENT,
  `id` INT(255) NOT NULL,
  `fl_name` int(255) NOT NULL DEFAULT 0,
  `flt` time NOT NULL DEFAULT current_timestamp(),
  `fld` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY(`fl_id`),
  FOREIGN KEY (`id`) REFERENCES `cdf`(`id`) ON UPDATE CASCADE ON DELETE CASCADE
);



 <div class="loader-wrapper" id="loader-wrapper">
        <div class="loader-fader">
            <div class="i-cover">
                <img src="./assets/logo.jpg" alt="wrata-logo" class="wrata-logo-loader">
                <h1>
                    <strong class="ldr-motoka">WRATA CONSTRUCTION</strong>
                    <br><strong class="ldr-zambia">COMPANY</strong>
                </h1>
                <div class="progress-counter" id="progress-counter">85%</div>
            </div>
            <div class="loader-notifier">
                <div class="notiers">
                    <p class="omae-brand" style="width: 100%;">
                        <strong>
                            <span style="color:grey;
                                font-family:arial;
                                    font-weight:100;">
                                    Developed By
                            </span> 
                            <br>
                            <span style="color:grey;font-family:arial;font-weight:800;">OMAE</span><span style="color:orange;font-family:arial;font-weight:800;">SOFTWARE</span>
                            <br>
                            <span style="color:lightgrey;">&copy; 2023</span>
                        </strong>
                    </p>
                </div>
            </div>   
        </div>    
    </div>