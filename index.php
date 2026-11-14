<?php
/**
 * වයඹ පළාත් ඉංජිනේරු සේවා දෙපාර්තමේන්තුව - නිල වෙබ් අඩවි නඩත්තු පද්ධතිය (Maintenance Mode System)
 * Department of Engineering Services - North Western Province
 * வடமேல் மாகாண பொறியியல் சேவைகள் திணைக்களம்
 */

// පෙරනිමි භාෂාව තෝරාගැනීම (Default language: en = English)
$available_langs = ['en', 'si', 'ta'];
$lang = isset($_GET['lang']) && in_array($_GET['lang'], $available_langs) ? $_GET['lang'] : 'en';

// දෙපාර්තමේන්තු තොරතුරු සැකසුම් (Department Configuration)
$config = [
    'phone' => '+94 37 222 2718 / +94 37 222 3846',
    'fax'   => '+94 37 222 2718',
    'email' => 'info@engdept.nw.gov.lk',
    'address_si' => 'පළාත් ඉංජිනේරු සේවා දෙපාර්තමේන්තුව, පළාත් සභා සංකීර්ණය, කුරුණෑගල, ශ්‍රී ලංකාව.',
    'address_ta' => 'மாகாண பொறியியல் சேவைகள் திணைக்களம், மாகாண சபை வளாகம், குருநாகல், இலங்கை.',
    'address_en' => 'Provincial Engineering Services Department, Provincial Council Complex, Kurunegala, Sri Lanka.',
    'working_hours_si' => 'සඳුදා - සිකුරාදා : පෙ.ව. 8:30 සිට ප.ව. 4:15 දක්වා (රජයේ නිවාඩු දින හැර)',
    'working_hours_ta' => 'திங்கள் - வெள்ளி : மு.ப. 8:30 முதல் பி.ப. 4:15 வரை (அரசாங்க விடுமுறை தினங்கள் தவிர்ந்த)',
    'working_hours_en' => 'Monday - Friday : 8:30 AM to 4:15 PM (Excluding Public Holidays)',
    'expected_date' => date('Y-m-d\TH:i:s', strtotime('+7 days 18:00')) // පෙරනිමියෙන් දින 7ක් ඉදිරියට (හෝ ඔබ කැමති දිනයක් ඇතුළත් කරන්න)
];

// භාෂා ත්‍රිත්වයේ සම්පූර්ණ අන්තර්ගතය (Complete Trilingual Content Dictionary)
$translations = [
    'si' => [
        'page_title' => 'වෙබ් අඩවිය නඩත්තු වෙමින් පවතී | වයඹ පළාත් ඉංජිනේරු සේවා දෙපාර්තමේන්තුව',
        'dept_badge' => 'වයඹ පළාත් සභාව - ශ්‍රී ලංකා',
        'dept_title' => 'වයඹ පළාත් ඉංජිනේරු සේවා දෙපාර්තමේන්තුව',
        'status_tag' => 'පද්ධති නඩත්තුවකි',
        'heading' => 'අපගේ වෙබ් අඩවිය තාවකාලිකව වසා ඇත',
        'subheading' => 'පද්ධති වැඩිදියුණු කිරීමේ සහ නඩත්තු කටයුත්තක් හේතුවෙන් වෙබ් අඩවිය තාවකාලිකව ක්‍රියා විරහිත කර ඇත.',
        'message' => 'ඔබට වඩාත් කාර්යක්ෂම සහ උසස් තත්වයේ මාර්ගගත සේවාවක් සැපයීම වෙනුවෙන් අපගේ වෙබ් අඩවිය මේ වන විට තාක්ෂණික නවීකරණයකට ලක්වෙමින් පවතී. මෙම කාලසීමාව තුළ ඔබට සිදුවන අපහසුතාවය පිළිබඳව අපගේ බලවත් කනගාටුව ප්‍රකාශ කරමු.',
        'countdown_title' => 'නැවත සක්‍රීය වීමට අපේක්ෂිත කාලය',
        'days' => 'දින',
        'hours' => 'පැය',
        'minutes' => 'මිනිත්තු',
        'seconds' => 'තත්පර',
        'contact_title' => 'හදිසි අවශ්‍යතා සහ තොරතුරු සඳහා අප අමතන්න',
        'phone_lbl' => 'දුරකථන අංක',
        'fax_lbl' => 'ෆැක්ස් අංකය',
        'email_lbl' => 'විද්‍යුත් තැපෑල',
        'hours_lbl' => 'කාර්යාල වේලාවන්',
        'address_lbl' => 'ලිපිනය',
        'address_val' => $config['address_si'],
        'hours_val' => $config['working_hours_si'],
        'footer' => '© ' . date('Y') . ' වයඹ පළාත් ඉංජිනේරු සේවා දෙපාර්තමේන්තුව. සියලුම හිමිකම් ඇවිරිණි.'
    ],
    'ta' => [
        'page_title' => 'இணையத்தளம் பராமரிப்பில் உள்ளது | வடமேல் மாகாண பொறியியல் சேவைகள் திணைக்களம்',
        'dept_badge' => 'வடமேல் மாகாண சபை - இலங்கை',
        'dept_title' => 'வடமேல் மாகாண பொறியியல் சேவைகள் திணைக்களம்',
        'status_tag' => 'அமைப்பு பராமரிப்பு',
        'heading' => 'எமது இணையத்தளம் தற்காலிகமாக மூடப்பட்டுள்ளது',
        'subheading' => 'அமைப்பின் மேம்பாட்டு மற்றும் பராமரிப்பு பணிகள் காரணமாக எமது இணையத்தளம் தற்காலிகமாக இடைநிறுத்தப்பட்டுள்ளது.',
        'message' => 'உங்களுக்கு மேலும் சிறந்த மற்றும் வினைத்திறனான சேவையை வழங்குவதற்காக எமது உத்தியோகபூர்வ இணையத்தளம் மேம்படுத்தப்பட்டு வருகின்றது. இதனால் உங்களுக்கு ஏற்படும் சிரமத்திற்கு வருந்துகிறோம். மிக விரைவில் புதிய தோற்றத்துடன் மீண்டும் உங்களை சந்திப்போம்.',
        'countdown_title' => 'மீண்டும் செயல்பட எதிர்பார்க்கப்படும் நேரம்',
        'days' => 'நாட்கள்',
        'hours' => 'மணிகள்',
        'minutes' => 'நிமிடங்கள்',
        'seconds' => 'வினாடிகள்',
        'contact_title' => 'அவசர தேவைகள் மற்றும் விபரங்களுக்கு எங்களை தொடர்பு கொள்ளவும்',
        'phone_lbl' => 'தொலைபேசி எண்கள்',
        'fax_lbl' => 'தொலைநகல்',
        'email_lbl' => 'மின்னஞ்சல்',
        'hours_lbl' => 'அலுவலக நேரம்',
        'address_lbl' => 'முகவரி',
        'address_val' => $config['address_ta'],
        'hours_val' => $config['working_hours_ta'],
        'footer' => '© ' . date('Y') . ' வடமேல் மாகாண பொறியியல் சேவைகள் திணைக்களம். அனைத்து உரிமைகளும் பாதுகாக்கப்பட்டவை.'
    ],
    'en' => [
        'page_title' => 'Website Under Maintenance | Department of Engineering Services - NWP',
        'dept_badge' => 'North Western Provincial Council - Sri Lanka',
        'dept_title' => 'Department of Engineering Services (North Western Province)',
        'status_tag' => 'System Maintenance',
        'heading' => 'Website Under Scheduled Maintenance',
        'subheading' => 'Our website is temporarily unavailable while we perform scheduled system upgrades and maintenance.',
        'message' => 'We are enhancing our digital platform to provide you with a faster, safer, and more user-friendly experience. We apologize for any inconvenience this may cause and appreciate your patience. We will be back online shortly.',
        'countdown_title' => 'Estimated Time Until Reopening',
        'days' => 'Days',
        'hours' => 'Hours',
        'minutes' => 'Minutes',
        'seconds' => 'Seconds',
        'contact_title' => 'For Urgent Matters and Inquiries, Please Contact Us',
        'phone_lbl' => 'Telephone',
        'fax_lbl' => 'Fax',
        'email_lbl' => 'Email',
        'hours_lbl' => 'Office Hours',
        'address_lbl' => 'Address',
        'address_val' => $config['address_en'],
        'hours_val' => $config['working_hours_en'],
        'footer' => '© ' . date('Y') . ' Department of Engineering Services, North Western Province. All Rights Reserved.'
    ]
];

$cur = $translations[$lang];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang) ?>" id="html-root">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Department of Engineering Services - North Western Province Website is temporarily under scheduled maintenance.">
    
    <title id="meta-title"><?= htmlspecialchars($cur['page_title']) ?></title>
    
    <!-- Google Fonts for Sinhala, Tamil, and English -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Noto+Sans+Sinhala:wght@400;500;600;700;800&family=Noto+Sans+Tamil:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary: #0a2540;
            --primary-dark: #07192c;
            --primary-blue: #1e3a8a;
            --accent: #d97706;
            --gold: #f59e0b;
            --gold-light: #fef3c7;
            --text-dark: #0f172a;
            --text-body: #475569;
            --text-muted: #64748b;
            --card-bg: #ffffff;
            --border: #e2e8f0;
            --shadow-card: 0 20px 40px -15px rgba(10, 37, 64, 0.25), 0 0 0 1px rgba(255, 255, 255, 0.6);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', 'Noto Sans Sinhala', 'Noto Sans Tamil', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background: linear-gradient(135deg, #0b1329 0%, #172554 45%, #0a2540 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            color: var(--text-dark);
            position: relative;
            overflow-x: hidden;
        }

        /* පසුබිම් රටා (Background Grid and Ambient Glow) */
        .ambient-bg {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 15%, rgba(245, 158, 11, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 80% 85%, rgba(37, 99, 235, 0.18) 0%, transparent 50%),
                linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 100% 100%, 100% 100%, 40px 40px, 40px 40px;
            pointer-events: none;
            z-index: 0;
        }

        /* Top Header Navbar */
        .top-navbar {
            position: relative;
            z-index: 10;
            background: rgba(10, 37, 64, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.12);
            padding: 14px 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
        }

        .brand-container {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .emblem-icon-box {
            width: 48px;
            height: 48px;
            background: #ffffff;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
            border: 2px solid #fef08a;
            flex-shrink: 0;
        }

        .emblem-icon-box svg {
            width: 32px;
            height: 32px;
            fill: #b45309;
        }

        .brand-text {
            color: #ffffff;
        }

        .brand-badge {
            font-size: 0.78rem;
            color: #fbbf24;
            font-weight: 600;
            letter-spacing: 0.6px;
            text-transform: uppercase;
        }

        .brand-title {
            font-size: 1.12rem;
            font-weight: 700;
            line-height: 1.3;
            color: #f8fafc;
        }

        /* Language Switcher */
        .lang-switch-box {
            display: flex;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 35px;
            padding: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .lang-button {
            background: transparent;
            color: #e2e8f0;
            border: none;
            padding: 7px 18px;
            border-radius: 25px;
            font-size: 0.88rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.25s ease;
            text-decoration: none;
            display: inline-block;
        }

        .lang-button:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.15);
        }

        .lang-button.active {
            background: var(--gold);
            color: #0f172a;
            font-weight: 700;
            box-shadow: 0 2px 10px rgba(245, 158, 11, 0.4);
        }

        /* Main Content Container */
        .main-content {
            position: relative;
            z-index: 1;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 16px;
        }

        .maintenance-panel {
            background: var(--card-bg);
            max-width: 900px;
            width: 100%;
            border-radius: 24px;
            box-shadow: var(--shadow-card);
            overflow: hidden;
            animation: slideUp 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes slideUp {
            from { opacity: 0; transform: translateY(24px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .panel-top-stripe {
            height: 6px;
            background: linear-gradient(90deg, #d97706 0%, #f59e0b 50%, #3b82f6 100%);
        }

        .panel-body {
            padding: 44px 40px 36px;
            text-align: center;
        }

        /* Interactive Mechanical Gears Animation */
        .animation-zone {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 26px;
        }

        .gears-halo {
            position: relative;
            width: 124px;
            height: 124px;
            background: linear-gradient(135deg, #fef3c7, #fef9c3);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 4px solid #fde68a;
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.22);
        }

        .gear-primary {
            width: 64px;
            height: 64px;
            color: #d97706;
            animation: rotateClockwise 12s linear infinite;
        }

        .gear-secondary {
            position: absolute;
            bottom: 14px;
            right: 14px;
            width: 38px;
            height: 38px;
            color: #1e3a8a;
            animation: rotateCounter 8s linear infinite;
        }

        @keyframes rotateClockwise {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        @keyframes rotateCounter {
            from { transform: rotate(0deg); }
            to { transform: rotate(-360deg); }
        }

        /* Status Badge */
        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #fef2f2;
            color: #dc2626;
            border: 1px solid #fecaca;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.84rem;
            font-weight: 700;
            margin-bottom: 16px;
            letter-spacing: 0.4px;
            text-transform: uppercase;
        }

        .status-glow {
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            animation: blinkGlow 1.8s ease-in-out infinite;
        }

        @keyframes blinkGlow {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.35; transform: scale(1.35); }
        }

        /* Typography */
        .title-primary {
            font-size: 2rem;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.3;
            margin-bottom: 12px;
        }

        .title-sub {
            font-size: 1.15rem;
            font-weight: 600;
            color: #334155;
            margin-bottom: 16px;
            line-height: 1.5;
        }

        .message-paragraph {
            color: var(--text-body);
            font-size: 1rem;
            line-height: 1.75;
            max-width: 720px;
            margin: 0 auto 32px;
        }

        /* Countdown Box */
        .countdown-container {
            background: #f8fafc;
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 24px 20px;
            margin-bottom: 34px;
        }

        .countdown-heading {
            font-size: 0.95rem;
            font-weight: 700;
            color: #334155;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .countdown-heading svg {
            width: 18px;
            height: 18px;
            color: var(--accent);
        }

        .countdown-grid {
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .countdown-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            min-width: 86px;
            padding: 12px 10px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }

        .countdown-number {
            font-size: 1.95rem;
            font-weight: 800;
            color: #0f172a;
            font-variant-numeric: tabular-nums;
            display: block;
            line-height: 1.1;
        }

        .countdown-text {
            font-size: 0.76rem;
            color: #64748b;
            text-transform: uppercase;
            font-weight: 600;
            margin-top: 6px;
            display: block;
        }

        /* Official Contacts */
        .contacts-wrapper {
            border-top: 1px solid var(--border);
            padding-top: 30px;
            text-align: left;
        }

        .contacts-header {
            font-size: 1.05rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 20px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .contacts-header svg {
            width: 20px;
            height: 20px;
            color: var(--accent);
        }

        .contacts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 18px;
        }

        .contact-item {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 16px;
            display: flex;
            align-items: flex-start;
            gap: 14px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .contact-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px -4px rgba(0, 0, 0, 0.08);
            border-color: #cbd5e1;
        }

        .contact-badge-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .contact-badge-icon svg {
            width: 20px;
            height: 20px;
        }

        .icon-phone { background: #e0f2fe; color: #0284c7; }
        .icon-email { background: #fef3c7; color: #d97706; }
        .icon-hours { background: #dcfce7; color: #16a34a; }
        .icon-address { background: #f3e8ff; color: #9333ea; }

        .contact-details {
            font-size: 0.9rem;
        }

        .contact-title-tag {
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 3px;
            display: block;
        }

        .contact-value-tag {
            color: #64748b;
            line-height: 1.5;
            word-break: break-word;
        }

        .contact-value-tag a {
            color: #0284c7;
            text-decoration: none;
            font-weight: 600;
        }

        .contact-value-tag a:hover {
            text-decoration: underline;
        }

        /* Footer */
        .page-footer {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 20px;
            color: #94a3b8;
            font-size: 0.85rem;
            background: rgba(10, 37, 64, 0.6);
            border-top: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Mobile Responsiveness */
        @media (max-width: 680px) {
            .top-navbar {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .brand-container {
                flex-direction: column;
            }
            .lang-switch-box {
                width: 100%;
                justify-content: center;
            }
            .panel-body {
                padding: 30px 18px 24px;
            }
            .title-primary {
                font-size: 1.5rem;
            }
            .title-sub {
                font-size: 1rem;
            }
            .countdown-card {
                min-width: 70px;
                padding: 10px 6px;
            }
            .countdown-number {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>

    <div class="ambient-bg"></div>

    <!-- ඉහළ තීරුව / Top Header -->
    <header class="top-navbar">
        <div class="brand-container">
            <div class="emblem-icon-box" title="ශ්‍රී ලංකා රාජ්‍ය ලාංඡනය">
                <!-- ආණ්ඩුක්‍රම රාජ්‍ය ලාංඡන රූපසටහන -->
                <svg viewBox="0 0 24 24">
                    <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z"/>
                </svg>
            </div>
            <div class="brand-text">
                <div class="brand-badge" id="txt-dept-badge"><?= htmlspecialchars($cur['dept_badge']) ?></div>
                <div class="brand-title" id="txt-dept-title"><?= htmlspecialchars($cur['dept_title']) ?></div>
            </div>
        </div>

        <!-- භාෂා ත්‍රිත්වය මාරු කිරීමේ බොත්තම් (Language Selector) -->
        <nav class="lang-switch-box" aria-label="භාෂාව තෝරන්න">
            <button type="button" class="lang-button <?= $lang === 'si' ? 'active' : '' ?>" onclick="switchLang('si')">සිංහල</button>
            <button type="button" class="lang-button <?= $lang === 'ta' ? 'active' : '' ?>" onclick="switchLang('ta')">தமிழ்</button>
            <button type="button" class="lang-button <?= $lang === 'en' ? 'active' : '' ?>" onclick="switchLang('en')">English</button>
        </nav>
    </header>

    <!-- ප්‍රධාන නඩත්තු පුවරුව (Main Card) -->
    <main class="main-content">
        <article class="maintenance-panel">
            <div class="panel-top-stripe"></div>
            <div class="panel-body">
                
                <!-- සජීවීකරණය වන ගියර පද්ධතිය (Engineering Animated Gears) -->
                <div class="animation-zone">
                    <div class="gears-halo" aria-hidden="true">
                        <!-- ප්‍රධාන ගියරය -->
                        <svg class="gear-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1Z"/>
                        </svg>
                        <!-- සහයක ගියරය -->
                        <svg class="gear-secondary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="3"/>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1Z"/>
                        </svg>
                    </div>
                </div>

                <!-- තත්ව පිල (Status Pill) -->
                <div class="status-pill">
                    <span class="status-glow"></span>
                    <span id="txt-status-tag"><?= htmlspecialchars($cur['status_tag']) ?></span>
                </div>

                <!-- සිරස්තල සහ පණිවිඩය -->
                <h1 class="title-primary" id="txt-heading"><?= htmlspecialchars($cur['heading']) ?></h1>
                <p class="title-sub" id="txt-subheading"><?= htmlspecialchars($cur['subheading']) ?></p>
                <p class="message-paragraph" id="txt-message"><?= htmlspecialchars($cur['message']) ?></p>

                <!-- ගණන් කිරීමේ කොටස (Countdown Box) -->
                <div class="countdown-container">
                    <div class="countdown-heading">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                        <span id="txt-countdown-title"><?= htmlspecialchars($cur['countdown_title']) ?></span>
                    </div>

                    <div class="countdown-grid">
                        <div class="countdown-card">
                            <span class="countdown-number" id="num-days">00</span>
                            <span class="countdown-text" id="txt-days"><?= htmlspecialchars($cur['days']) ?></span>
                        </div>
                        <div class="countdown-card">
                            <span class="countdown-number" id="num-hours">00</span>
                            <span class="countdown-text" id="txt-hours"><?= htmlspecialchars($cur['hours']) ?></span>
                        </div>
                        <div class="countdown-card">
                            <span class="countdown-number" id="num-minutes">00</span>
                            <span class="countdown-text" id="txt-minutes"><?= htmlspecialchars($cur['minutes']) ?></span>
                        </div>
                        <div class="countdown-card">
                            <span class="countdown-number" id="num-seconds">00</span>
                            <span class="countdown-text" id="txt-seconds"><?= htmlspecialchars($cur['seconds']) ?></span>
                        </div>
                    </div>
                </div>

                <!-- හදිසි සම්බන්ධතා තොරතුරු (Official Contact Details) -->
                <div class="contacts-wrapper">
                    <div class="contacts-header">
                        <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <span id="txt-contact-title"><?= htmlspecialchars($cur['contact_title']) ?></span>
                    </div>

                    <div class="contacts-grid">
                        <!-- දුරකථන අංක -->
                        <div class="contact-item">
                            <div class="contact-badge-icon icon-phone">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <span class="contact-title-tag" id="txt-phone-lbl"><?= htmlspecialchars($cur['phone_lbl']) ?></span>
                                <span class="contact-value-tag">
                                    <a href="tel:+94372222718"><?= htmlspecialchars($config['phone']) ?></a>
                                </span>
                            </div>
                        </div>

                        <!-- විද්‍යුත් තැපෑල -->
                        <div class="contact-item">
                            <div class="contact-badge-icon icon-email">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <span class="contact-title-tag" id="txt-email-lbl"><?= htmlspecialchars($cur['email_lbl']) ?></span>
                                <span class="contact-value-tag">
                                    <a href="mailto:<?= htmlspecialchars($config['email']) ?>"><?= htmlspecialchars($config['email']) ?></a>
                                </span>
                            </div>
                        </div>

                        <!-- කාර්යාල වේලාවන් -->
                        <div class="contact-item">
                            <div class="contact-badge-icon icon-hours">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <span class="contact-title-tag" id="txt-hours-lbl"><?= htmlspecialchars($cur['hours_lbl']) ?></span>
                                <span class="contact-value-tag" id="txt-hours-val"><?= htmlspecialchars($cur['hours_val']) ?></span>
                            </div>
                        </div>

                        <!-- කාර්යාල ලිපිනය -->
                        <div class="contact-item">
                            <div class="contact-badge-icon icon-address">
                                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div class="contact-details">
                                <span class="contact-title-tag" id="txt-address-lbl"><?= htmlspecialchars($cur['address_lbl']) ?></span>
                                <span class="contact-value-tag" id="txt-address-val"><?= htmlspecialchars($cur['address_val']) ?></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>
    </main>

    <!-- පාදකය / Footer -->
    <footer class="page-footer">
        <p id="txt-footer"><?= htmlspecialchars($cur['footer']) ?></p>
    </footer>

    <!-- JavaScript For Instant Client-side Language Switching & Countdown -->
    <script>
        // ශබ්දකෝෂ දත්ත (Dictionary payload for instant switching without full reload)
        const translations = <?= json_encode($translations, JSON_UNESCAPED_UNICODE) ?>;
        let currentLang = <?= json_encode($lang) ?>;

        function switchLang(langKey) {
            if (!translations[langKey]) return;
            currentLang = langKey;

            // HTML lang attribute
            document.getElementById('html-root').setAttribute('lang', langKey);

            // Active button classes
            const buttons = document.querySelectorAll('.lang-button');
            buttons.forEach(btn => {
                if (btn.textContent.trim() === (langKey === 'si' ? 'සිංහල' : langKey === 'ta' ? 'தமிழ்' : 'English')) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });

            // Update texts in DOM
            const t = translations[langKey];
            document.title = t.page_title;
            document.getElementById('txt-dept-badge').textContent = t.dept_badge;
            document.getElementById('txt-dept-title').textContent = t.dept_title;
            document.getElementById('txt-status-tag').textContent = t.status_tag;
            document.getElementById('txt-heading').textContent = t.heading;
            document.getElementById('txt-subheading').textContent = t.subheading;
            document.getElementById('txt-message').textContent = t.message;
            document.getElementById('txt-countdown-title').textContent = t.countdown_title;
            document.getElementById('txt-days').textContent = t.days;
            document.getElementById('txt-hours').textContent = t.hours;
            document.getElementById('txt-minutes').textContent = t.minutes;
            document.getElementById('txt-seconds').textContent = t.seconds;
            document.getElementById('txt-contact-title').textContent = t.contact_title;
            document.getElementById('txt-phone-lbl').textContent = t.phone_lbl;
            document.getElementById('txt-email-lbl').textContent = t.email_lbl;
            document.getElementById('txt-hours-lbl').textContent = t.hours_lbl;
            document.getElementById('txt-hours-val').textContent = t.hours_val;
            document.getElementById('txt-address-lbl').textContent = t.address_lbl;
            document.getElementById('txt-address-val').textContent = t.address_val;
            document.getElementById('txt-footer').textContent = t.footer;

            // URL query param එක browser history එකේ update කිරීම (Reload නොවී)
            const newUrl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?lang=' + langKey;
            window.history.replaceState({ path: newUrl }, '', newUrl);
        }

        // ගණන් කිරීමේ ක්‍රියාකාරීත්වය (Countdown Timer)
        const targetDate = new Date("<?= $config['expected_date'] ?>").getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const difference = targetDate - now;

            if (difference > 0) {
                const days = Math.floor(difference / (1000 * 60 * 60 * 24));
                const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((difference % (1000 * 60)) / 1000);

                document.getElementById("num-days").textContent = String(days).padStart(2, '0');
                document.getElementById("num-hours").textContent = String(hours).padStart(2, '0');
                document.getElementById("num-minutes").textContent = String(minutes).padStart(2, '0');
                document.getElementById("num-seconds").textContent = String(seconds).padStart(2, '0');
            } else {
                document.getElementById("num-days").textContent = "00";
                document.getElementById("num-hours").textContent = "00";
                document.getElementById("num-minutes").textContent = "00";
                document.getElementById("num-seconds").textContent = "00";
            }
        }

        setInterval(updateCountdown, 1000);
        updateCountdown();
    </script>
</body>
</html>
