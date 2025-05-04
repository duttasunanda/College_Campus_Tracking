<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
                <h1 class="m-0 text-primary">COLLEGE CAMPUS TRACKING</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.php" class="dropdown-item">Job List</a>
                            <a href="job-detail.php" class="dropdown-item active">Job Detail</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.php" class="dropdown-item">Job Category</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                            <a href="404.php" class="dropdown-item">404</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <a href="login.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Job Detail</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Job Detail</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- Job Detail Start -->
         <!-- job 1 -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/microsoft.jpg" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Microsoft</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p> As a Software Engineer at Microsoft, you will play a critical role in designing, developing, and maintaining software solutions that serve millions of users across various products and services. You will collaborate with a team of engineers to build scalable and efficient systems, ensuring that Microsoft’s products meet high standards of performance, reliability, and security.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <p>Responsibility:- <br>
                                * Safety: Enhancing campus securi3ty and emergency response.<br>
                                 * Efficiency: Streamlining operations like attendance, transportation, and resource management.<br>
                                 * Communication: Facilitating information sharing and alerts.<br>
                                 * Privacy: Protecting user data and maintaining ethical standards.</p>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                            <p>Qualification:-<br>
                                Basic Eligibility:<br>
                                 * Bachelor's Degree (B.E./B.Tech.):<br>
                                   * This is the fundamental requirement for most engineering campus placements. Companies primarily recruit students who are in the final year of their B.E./B.Tech. programs.<br>
                                   * The specific engineering discipline (e.g., Computer Science, Mechanical, Electrical) must align with the company's needs.<br>
                                 * Academic Records:<br>
                                   * While not a "degree" itself, consistent academic performance is crucial. Employers examine:<br>
                                     * CGPA/GPA: A minimum threshold is often set.<br>
                                     * Lack of backlogs: Companies generally prefer students with a clean academic record.<br>
                                Degrees that can be beneficial:<br>
                                 * Master's Degree (M.E./M.Tech.):<br>
                                   * For specialized roles or research-oriented positions, an M.E./M.Tech. degree can be a significant advantage.<br>
                                   * It demonstrates advanced knowledge and expertise in a specific engineering field.<br>
                                 * Relevant Certifications:<br>
                                   * While not a degree, certifications in specific software, programming languages, or technical skills can enhance a student's profile.<br>
                                Key Considerations:<br>
                                 * Focus on the Bachelor's Degree: The vast majority of on-campus recruitment targets B.E./B.Tech. students.<br>
                                 * Beyond the Degree:<br>
                                   * Employers place significant emphasis on practical skills, project experience, internships, and soft skills, in addition to the degree itself.<br>
                                   * Therefore, while having the correct degree is essential, it is not the only factor that is considered.<br>
                                 * It is important to remember that the requirements will vary from company to company.<br>
                                In essence, a B.E./B.Tech. degree is the primary qualification, but a strong academic record and a well-rounded skill set are equally important.</p>
                            
                        </div>
        
                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Microsoft Corporation is a multinational technology company founded in 1975 by Bill Gates and Paul Allen, headquartered in Redmond, Washington. It is one of the world's largest technology companies, specializing in software, cloud computing, AI, and hardware. Microsoft’s key products include Windows OS, Microsoft Office (Word, Excel, PowerPoint, Outlook), and Microsoft Azure, its cloud computing platform. It also develops AI solutions, cybersecurity tools, and enterprise software like Dynamics 365 and Power BI. The company owns LinkedIn, GitHub, and the gaming brand Xbox. Microsoft is a leader in cloud computing, AI, and productivity solutions, competing with companies like Google, Amazon, and Apple. It continues to drive innovation with AI-powered tools like Copilot and ChatGPT (through OpenAI). With a presence in over 190 countries, Microsoft remains at the forefront of digital transformation and enterprise technology.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- job2 -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/Adobe.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Adobe</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As a Software Engineer at Adobe, you will play a key role in designing, developing, and optimizing software solutions that empower millions of users worldwide. You will collaborate with a team of engineers to build scalable, high-performance applications that enhance Adobe’s suite of creative, digital experience, and document solutions. Your contributions will ensure that Adobe’s products maintain the highest standards of innovation, security, and reliability, driving the future of digital creativity and productivity.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <p>Responsibility:- <br>
                                * Safety: Enhancing campus securi3ty and emergency response.<br>
                                 * Efficiency: Streamlining operations like attendance, transportation, and resource management.<br>
                                 * Communication: Facilitating information sharing and alerts.<br>
                                 * Privacy: Protecting user data and maintaining ethical standards.</p>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                            <p>Qualification:-<br>
                                Basic Eligibility:<br>
                                 * Bachelor's Degree (B.E./B.Tech.):<br>
                                   * This is the fundamental requirement for most engineering campus placements. Companies primarily recruit students who are in the final year of their B.E./B.Tech. programs.<br>
                                   * The specific engineering discipline (e.g., Computer Science, Mechanical, Electrical) must align with the company's needs.<br>
                                 * Academic Records:<br>
                                   * While not a "degree" itself, consistent academic performance is crucial. Employers examine:<br>
                                     * CGPA/GPA: A minimum threshold is often set.<br>
                                     * Lack of backlogs: Companies generally prefer students with a clean academic record.<br>
                                Degrees that can be beneficial:<br>
                                 * Master's Degree (M.E./M.Tech.):<br>
                                   * For specialized roles or research-oriented positions, an M.E./M.Tech. degree can be a significant advantage.<br>
                                   * It demonstrates advanced knowledge and expertise in a specific engineering field.<br>
                                 * Relevant Certifications:<br>
                                   * While not a degree, certifications in specific software, programming languages, or technical skills can enhance a student's profile.<br>
                                Key Considerations:<br>
                                 * Focus on the Bachelor's Degree: The vast majority of on-campus recruitment targets B.E./B.Tech. students.<br>
                                 * Beyond the Degree:<br>
                                   * Employers place significant emphasis on practical skills, project experience, internships, and soft skills, in addition to the degree itself.<br>
                                   * Therefore, while having the correct degree is essential, it is not the only factor that is considered.<br>
                                 * It is important to remember that the requirements will vary from company to company.<br>
                                In essence, a B.E./B.Tech. degree is the primary qualification, but a strong academic record and a well-rounded skill set are equally important.</p>
                            
                        </div>
        
                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                       
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Adobe is a multinational software company founded in 1982 and headquartered in San Jose, California. It is best known for its creative and digital media software, including Adobe Photoshop, Illustrator, Premiere Pro, and After Effects, which are widely used by designers, photographers, and video creators. Adobe also offers Adobe Acrobat and PDF solutions, making it a leader in digital document management. Its Adobe Experience Cloud provides AI-driven marketing, analytics, and customer engagement tools for businesses. The company has transitioned to a cloud-based model with Adobe Creative Cloud, offering subscription-based access to its software suite. With a strong focus on AI and innovation, Adobe integrates generative AI features through Adobe Firefly and continues to lead in digital creativity, document solutions, and customer experience management across industries worldwide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- job3 -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/oracle2.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">Oracle</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As a Software Engineer at Oracle, you will play a critical role in designing, developing, and maintaining software solutions that power businesses and enterprises worldwide. You will collaborate with a team of engineers to build scalable, efficient, and secure systems that support Oracle’s industry-leading cloud, database, and enterprise applications. Your work will contribute to ensuring that Oracle’s products meet the highest standards of performance, reliability, and innovation, driving the future of enterprise technology.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <p>Responsibility:- <br>
                                * Safety: Enhancing campus securi3ty and emergency response.<br>
                                 * Efficiency: Streamlining operations like attendance, transportation, and resource management.<br>
                                 * Communication: Facilitating information sharing and alerts.<br>
                                 * Privacy: Protecting user data and maintaining ethical standards.</p>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                            <p>Qualification:-<br>
                                Basic Eligibility:<br>
                                 * Bachelor's Degree (B.E./B.Tech.):<br>
                                   * This is the fundamental requirement for most engineering campus placements. Companies primarily recruit students who are in the final year of their B.E./B.Tech. programs.<br>
                                   * The specific engineering discipline (e.g., Computer Science, Mechanical, Electrical) must align with the company's needs.<br>
                                 * Academic Records:<br>
                                   * While not a "degree" itself, consistent academic performance is crucial. Employers examine:<br>
                                     * CGPA/GPA: A minimum threshold is often set.<br>
                                     * Lack of backlogs: Companies generally prefer students with a clean academic record.<br>
                                Degrees that can be beneficial:<br>
                                 * Master's Degree (M.E./M.Tech.):<br>
                                   * For specialized roles or research-oriented positions, an M.E./M.Tech. degree can be a significant advantage.<br>
                                   * It demonstrates advanced knowledge and expertise in a specific engineering field.<br>
                                 * Relevant Certifications:<br>
                                   * While not a degree, certifications in specific software, programming languages, or technical skills can enhance a student's profile.<br>
                                Key Considerations:<br>
                                 * Focus on the Bachelor's Degree: The vast majority of on-campus recruitment targets B.E./B.Tech. students.<br>
                                 * Beyond the Degree:<br>
                                   * Employers place significant emphasis on practical skills, project experience, internships, and soft skills, in addition to the degree itself.<br>
                                   * Therefore, while having the correct degree is essential, it is not the only factor that is considered.<br>
                                 * It is important to remember that the requirements will vary from company to company.<br>
                                In essence, a B.E./B.Tech. degree is the primary qualification, but a strong academic record and a well-rounded skill set are equally important.</p>
                            
                        </div>
        
                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Oracle Corporation is a multinational technology company founded in 1977 and headquartered in Austin, Texas. It is a global leader in database management, cloud computing, enterprise software, and AI-driven business solutions. Oracle’s key products include Oracle Database, one of the most widely used database management systems, and Oracle Cloud Infrastructure (OCI), offering cloud computing, AI, and machine learning solutions. The company also provides Enterprise Resource Planning (ERP), Customer Relationship Management (CRM), and Human Capital Management (HCM) software to businesses worldwide. With a strong presence in cloud services, Oracle competes with AWS, Microsoft Azure, and Google Cloud. It continues to expand its AI capabilities and cloud offerings, serving industries like finance, healthcare, and government. Oracle operates in over 175 countries and remains a major player in enterprise technology and digital transformation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- job4 -->


        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/sap.jpg" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">SAP</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As a Software Engineer at SAP, you will play a critical role in designing, developing, and maintaining software solutions that empower businesses across industries. You will collaborate with a team of engineers to build scalable and efficient systems, ensuring that SAP’s enterprise solutions meet high standards of performance, reliability, and security. Your work will contribute to driving digital transformation and innovation for organizations worldwide.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <p>Responsibility:- <br>
                                * Safety: Enhancing campus securi3ty and emergency response.<br>
                                 * Efficiency: Streamlining operations like attendance, transportation, and resource management.<br>
                                 * Communication: Facilitating information sharing and alerts.<br>
                                 * Privacy: Protecting user data and maintaining ethical standards.</p>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                            <p>Qualification:-<br>
                                Basic Eligibility:<br>
                                 * Bachelor's Degree (B.E./B.Tech.):<br>
                                   * This is the fundamental requirement for most engineering campus placements. Companies primarily recruit students who are in the final year of their B.E./B.Tech. programs.<br>
                                   * The specific engineering discipline (e.g., Computer Science, Mechanical, Electrical) must align with the company's needs.<br>
                                 * Academic Records:<br>
                                   * While not a "degree" itself, consistent academic performance is crucial. Employers examine:<br>
                                     * CGPA/GPA: A minimum threshold is often set.<br>
                                     * Lack of backlogs: Companies generally prefer students with a clean academic record.<br>
                                Degrees that can be beneficial:<br>
                                 * Master's Degree (M.E./M.Tech.):<br>
                                   * For specialized roles or research-oriented positions, an M.E./M.Tech. degree can be a significant advantage.<br>
                                   * It demonstrates advanced knowledge and expertise in a specific engineering field.<br>
                                 * Relevant Certifications:<br>
                                   * While not a degree, certifications in specific software, programming languages, or technical skills can enhance a student's profile.<br>
                                Key Considerations:<br>
                                 * Focus on the Bachelor's Degree: The vast majority of on-campus recruitment targets B.E./B.Tech. students.<br>
                                 * Beyond the Degree:<br>
                                   * Employers place significant emphasis on practical skills, project experience, internships, and soft skills, in addition to the degree itself.<br>
                                   * Therefore, while having the correct degree is essential, it is not the only factor that is considered.<br>
                                 * It is important to remember that the requirements will vary from company to company.<br>
                                In essence, a B.E./B.Tech. degree is the primary qualification, but a strong academic record and a well-rounded skill set are equally important.</p>
                            
                        </div>
        
                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summery</h4>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 01 Jan, 2045</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 123 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: $123 - $456</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: New York, USA</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 01 Jan, 2045</p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">SAP (Systems, Applications, and Products in Data Processing) is a leading global enterprise software company founded in 1972 and headquartered in Walldorf, Germany. It specializes in developing business software solutions for enterprise resource planning (ERP), customer relationship management (CRM), supply chain management (SCM), and data analytics. SAP’s key products include SAP S/4HANA, a cloud-based ERP suite, SAP Business Technology Platform (BTP) for AI and analytics, and industry-specific solutions that help businesses optimize operations. The company serves industries like finance, manufacturing, healthcare, and retail. With a strong focus on digital transformation, SAP provides cloud-based services and AI-driven automation, making it a leader in enterprise solutions. It operates in over 180 countries and continues to drive innovation in business software and data management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- job5 -->



        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/nvidia.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">nvidia</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As a Software Engineer at NVIDIA, you will play a critical role in designing, developing, and optimizing software solutions that power cutting-edge AI, graphics, and computing technologies. You will collaborate with a team of engineers to build scalable and efficient systems, ensuring that NVIDIA’s products meet high standards of performance, reliability, and security. Your work will contribute to advancing innovations in gaming, AI, autonomous vehicles, and high-performance computing.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <p>Responsibility:- <br>
                                * Safety: Enhancing campus securi3ty and emergency response.<br>
                                 * Efficiency: Streamlining operations like attendance, transportation, and resource management.<br>
                                 * Communication: Facilitating information sharing and alerts.<br>
                                 * Privacy: Protecting user data and maintaining ethical standards.</p>
                            </ul>
                            <h4 class="mb-3">Qualifications</h4>
                            <p>Qualification:-<br>
                                Basic Eligibility:<br>
                                 * Bachelor's Degree (B.E./B.Tech.):<br>
                                   * This is the fundamental requirement for most engineering campus placements. Companies primarily recruit students who are in the final year of their B.E./B.Tech. programs.<br>
                                   * The specific engineering discipline (e.g., Computer Science, Mechanical, Electrical) must align with the company's needs.<br>
                                 * Academic Records:<br>
                                   * While not a "degree" itself, consistent academic performance is crucial. Employers examine:<br>
                                     * CGPA/GPA: A minimum threshold is often set.<br>
                                     * Lack of backlogs: Companies generally prefer students with a clean academic record.<br>
                                Degrees that can be beneficial:<br>
                                 * Master's Degree (M.E./M.Tech.):<br>
                                   * For specialized roles or research-oriented positions, an M.E./M.Tech. degree can be a significant advantage.<br>
                                   * It demonstrates advanced knowledge and expertise in a specific engineering field.<br>
                                 * Relevant Certifications:<br>
                                   * While not a degree, certifications in specific software, programming languages, or technical skills can enhance a student's profile.<br>
                                Key Considerations:<br>
                                 * Focus on the Bachelor's Degree: The vast majority of on-campus recruitment targets B.E./B.Tech. students.<br>
                                 * Beyond the Degree:<br>
                                   * Employers place significant emphasis on practical skills, project experience, internships, and soft skills, in addition to the degree itself.<br>
                                   * Therefore, while having the correct degree is essential, it is not the only factor that is considered.<br>
                                 * It is important to remember that the requirements will vary from company to company.<br>
                                In essence, a B.E./B.Tech. degree is the primary qualification, but a strong academic record and a well-rounded skill set are equally important.</p>
                            
                        </div>
        
                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">NVIDIA, founded in 1993, is a leading technology company known for its high-performance graphics processing units (GPUs) and innovations in AI and machine learning. It is a major player in gaming, professional graphics, data centers, and automotive technology. NVIDIA's products include the popular GeForce and RTX gaming GPUs, as well as AI solutions for industries like healthcare and autonomous driving. The company has a market cap of over $2 trillion and continues to lead in AI research and data center innovations. It also acquired Mellanox in 2020 to enhance its cloud computing and AI capabilities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- job 6 -->

        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/ibm.png" alt="" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3">IBM</h3>
                                <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p>As a Software Engineer at IBM, you will play a critical role in designing, developing, and maintaining software solutions that drive innovation across industries. You will collaborate with a team of engineers to build scalable and efficient systems, ensuring that IBM’s products and services meet high standards of performance, reliability, and security. Your work will contribute to advancing cutting-edge technologies in cloud computing, AI, and enterprise solutions, shaping the future of digital transformation.</p>
                            <h4 class="mb-3">Responsibility</h4>
                            <p>Responsibility:- <br>
                                * Safety: Enhancing campus securi3ty and emergency response.<br>
                                 * Efficiency: Streamlining operations like attendance, transportation, and resource management.<br>
                                 * Communication: Facilitating information sharing and alerts.<br>
                                 * Privacy: Protecting user data and maintaining ethical standards.</p>
                            
                            <h4 class="mb-3">Qualifications</h4>
                            <p>Qualification:-<br>
                                Basic Eligibility:<br>
                                 * Bachelor's Degree (B.E./B.Tech.):<br>
                                   * This is the fundamental requirement for most engineering campus placements. Companies primarily recruit students who are in the final year of their B.E./B.Tech. programs.<br>
                                   * The specific engineering discipline (e.g., Computer Science, Mechanical, Electrical) must align with the company's needs.<br>
                                 * Academic Records:<br>
                                   * While not a "degree" itself, consistent academic performance is crucial. Employers examine:<br>
                                     * CGPA/GPA: A minimum threshold is often set.<br>
                                     * Lack of backlogs: Companies generally prefer students with a clean academic record.<br>
                                Degrees that can be beneficial:<br>
                                 * Master's Degree (M.E./M.Tech.):<br>
                                   * For specialized roles or research-oriented positions, an M.E./M.Tech. degree can be a significant advantage.<br>
                                   * It demonstrates advanced knowledge and expertise in a specific engineering field.<br>
                                 * Relevant Certifications:<br>
                                   * While not a degree, certifications in specific software, programming languages, or technical skills can enhance a student's profile.<br>
                                Key Considerations:<br>
                                 * Focus on the Bachelor's Degree: The vast majority of on-campus recruitment targets B.E./B.Tech. students.<br>
                                 * Beyond the Degree:<br>
                                   * Employers place significant emphasis on practical skills, project experience, internships, and soft skills, in addition to the degree itself.<br>
                                   * Therefore, while having the correct degree is essential, it is not the only factor that is considered.<br>
                                 * It is important to remember that the requirements will vary from company to company.<br>
                                In essence, a B.E./B.Tech. degree is the primary qualification, but a strong academic record and a well-rounded skill set are equally important.</p>
                            
                        </div>
        
                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form>
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Portfolio Website">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="file" class="form-control bg-white">
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" rows="5" placeholder="Coverletter"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
        
                    <div class="col-lg-4">
                       
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">IBM (International Business Machines Corporation) is a global technology company founded in 1911 and headquartered in Armonk, New York. It is known for its innovations in computing, cloud solutions, artificial intelligence (AI), and enterprise software. IBM provides services in hybrid cloud computing, AI-driven analytics, cybersecurity, and quantum computing. The company’s key offerings include IBM Cloud, Watson AI, mainframe computers, and enterprise software solutions. IBM is also a leader in blockchain technology and cybersecurity services. Over the years, it has made strategic acquisitions, such as Red Hat in 2019, to enhance its cloud computing and AI capabilities. With a strong presence in over 170 countries, IBM continues to shape the future of enterprise technology, helping businesses optimize operations through AI, automation, and data analytics.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Company</h5>
                        <a class="btn btn-link text-white-50" href="about.php">About Us</a>
                        <a class="btn btn-link text-white-50" href="contact.php">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="index.php">Our Services</a>
                        <a class="btn btn-link text-white-50" href="index.php">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="index.php">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="about.php">About Us</a>
                        <a class="btn btn-link text-white-50" href="contact.php">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="index.php">Our Services</a>
                        <a class="btn btn-link text-white-50" href="index.php">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="index.php">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Contact</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Address: 74/27, MULAJORH ROAD PRITINAGAR, Jagatdal, North 24 Parganas, West Bengal, 743125</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 8274856555</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>anubhob40@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/anubhobpaul/?utm_source=qr&igsh=MndzcWVudWwxbDZs#"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/Sonu.M.20?mibextid=Ta7yifwSUDhrfWSo"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@Lyrically_Riddhika"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/in/anubhob-paul-676799321/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="index.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>