<!doctype html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
  <title>{{$title}}</title>
  <script type="module" crossorigin src="/theme/{{$theme}}/assets/umi.js"></script>
  <style>
    /* ===== 浅色系简约精致登录主题 ===== */
    * { box-sizing: border-box; }

    /* 背景：柔和的蓝紫渐变，带细腻光晕 */
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Inter', 'Segoe UI', Roboto, sans-serif;
      background: linear-gradient(135deg, #eef2ff 0%, #f0f9ff 40%, #faf5ff 100%) !important;
      min-height: 100vh;
    }

    /* 全局背景覆盖 */
    #app,
    #app > div {
      background: transparent !important;
      background-image: none !important;
    }

    #app > div > div[style*="background"] {
      background-image: none !important;
      background: linear-gradient(135deg, #eef2ff 0%, #f0f9ff 40%, #faf5ff 100%) !important;
    }

    /* 登录容器：全屏居中，带装饰光晕 */
    .passport,
    [class*="passport"],
    [class*="login"] {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      min-height: 100vh !important;
      background: transparent !important;
      background-image: none !important;
      position: relative !important;
    }

    /* 背景装饰光晕（伪元素注入到 body） */
    body::before {
      content: '';
      position: fixed;
      top: -20%;
      left: -10%;
      width: 60vw;
      height: 60vw;
      background: radial-gradient(circle, rgba(167, 139, 250, 0.18) 0%, transparent 70%);
      pointer-events: none;
      z-index: 0;
    }

    body::after {
      content: '';
      position: fixed;
      bottom: -15%;
      right: -10%;
      width: 50vw;
      height: 50vw;
      background: radial-gradient(circle, rgba(96, 165, 250, 0.15) 0%, transparent 70%);
      pointer-events: none;
      z-index: 0;
    }

    /* 登录卡片：磨砂玻璃质感白卡 */
    .passport .n-card,
    [class*="passport"] .n-card,
    [class*="login"] .n-card,
    .n-card[class*="login"],
    .wrapper .n-card {
      width: 400px !important;
      max-width: 92vw !important;
      border-radius: 20px !important;
      border: 1px solid rgba(255, 255, 255, 0.85) !important;
      box-shadow:
        0 4px 6px rgba(0, 0, 0, 0.04),
        0 20px 60px rgba(99, 102, 241, 0.10),
        0 1px 0 rgba(255, 255, 255, 0.9) inset !important;
      padding: 4px !important;
      background: rgba(255, 255, 255, 0.82) !important;
      backdrop-filter: blur(20px) !important;
      -webkit-backdrop-filter: blur(20px) !important;
      position: relative !important;
      z-index: 1 !important;
    }

    /* 卡片头部 */
    .n-card-header {
      padding: 32px 32px 0 32px !important;
    }

    .n-card-header__main {
      font-size: 24px !important;
      font-weight: 700 !important;
      color: #1e1b4b !important;
      letter-spacing: -0.5px !important;
      line-height: 1.3 !important;
    }

    /* 卡片内容区 */
    .n-card__content {
      padding: 24px 32px 32px 32px !important;
    }

    /* 表单标签 */
    .n-form-item-label {
      font-size: 13px !important;
      font-weight: 500 !important;
      color: #6b7280 !important;
      padding-bottom: 6px !important;
      letter-spacing: 0.1px !important;
    }

    /* 表单间距 */
    .n-form-item {
      margin-bottom: 16px !important;
    }

    /* 输入框：浅色精致风 */
    .n-input {
      border-radius: 12px !important;
      background: rgba(248, 250, 252, 0.9) !important;
      border: 1.5px solid #e2e8f0 !important;
      transition: all 0.2s ease !important;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04) !important;
    }

    .n-input:hover {
      border-color: #c7d2fe !important;
      background: rgba(255, 255, 255, 0.95) !important;
    }

    .n-input--focus,
    .n-input:focus-within {
      border-color: #818cf8 !important;
      background: #ffffff !important;
      box-shadow: 0 0 0 3px rgba(129, 140, 248, 0.15) !important;
    }

    .n-input .n-input__input-el {
      font-size: 14px !important;
      color: #1e293b !important;
      font-weight: 400 !important;
    }

    .n-input .n-input__placeholder {
      color: #94a3b8 !important;
    }

    /* 主按钮：蓝紫渐变 */
    .n-button--primary-type {
      background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%) !important;
      border: none !important;
      border-radius: 12px !important;
      height: 44px !important;
      font-size: 14px !important;
      font-weight: 600 !important;
      letter-spacing: 0.3px !important;
      color: #ffffff !important;
      box-shadow: 0 4px 14px rgba(99, 102, 241, 0.35) !important;
      transition: all 0.25s ease !important;
    }

    .n-button--primary-type:hover {
      background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%) !important;
      box-shadow: 0 6px 20px rgba(99, 102, 241, 0.45) !important;
      transform: translateY(-1px) !important;
    }

    .n-button--primary-type:active {
      transform: translateY(0) !important;
      box-shadow: 0 2px 8px rgba(99, 102, 241, 0.3) !important;
    }

    /* 次要按钮 */
    .n-button:not(.n-button--primary-type) {
      border-radius: 12px !important;
      font-size: 13px !important;
      color: #6366f1 !important;
      border-color: #e0e7ff !important;
      background: rgba(238, 242, 255, 0.6) !important;
      transition: all 0.2s ease !important;
    }

    .n-button:not(.n-button--primary-type):hover {
      background: rgba(238, 242, 255, 0.9) !important;
      border-color: #c7d2fe !important;
    }

    /* Tab 切换（登录/注册） */
    .n-tabs .n-tabs-tab {
      font-size: 14px !important;
      font-weight: 500 !important;
      color: #94a3b8 !important;
      padding: 8px 0 !important;
      transition: color 0.2s ease !important;
    }

    .n-tabs .n-tabs-tab--active {
      color: #4f46e5 !important;
      font-weight: 600 !important;
    }

    .n-tabs .n-tabs-bar {
      background: linear-gradient(90deg, #6366f1, #8b5cf6) !important;
      height: 2px !important;
      border-radius: 2px !important;
    }

    /* 分割线 */
    .n-divider {
      border-color: #f1f5f9 !important;
    }

    /* 链接文字 */
    .n-a, a {
      color: #6366f1 !important;
      text-decoration: none !important;
      transition: color 0.2s ease !important;
    }

    .n-a:hover, a:hover {
      color: #4f46e5 !important;
    }

    /* Logo */
    img[class*="logo"],
    [class*="logo"] img {
      filter: none !important;
      opacity: 1 !important;
    }

    /* 错误提示文字 */
    .n-form-item-feedback-wrapper {
      font-size: 12px !important;
      color: #f87171 !important;
    }

    /* 移动端适配 */
    @media (max-width: 480px) {
      .n-card {
        border-radius: 16px !important;
        margin: 12px !important;
      }
      .n-card-header {
        padding: 24px 24px 0 24px !important;
      }
      .n-card__content {
        padding: 18px 24px 24px 24px !important;
      }
      .n-card-header__main {
        font-size: 20px !important;
      }
    }
  </style>
</head>

<body>

  <script>
    window.routerBase = "/";
    window.settings = {
      title: '{{$title}}',
      assets_path: '/theme/{{$theme}}/assets',
      theme: {
        color: '{{ $theme_config['theme_color'] ?? "default" }}',
      },
      version: '{{$version}}',
      background_url: '{{$theme_config['background_url']}}',
      description: '{{$description}}',
      i18n: [
        'zh-CN',
        'en-US',
        'ja-JP',
        'vi-VN',
        'ko-KR',
        'zh-TW',
        'fa-IR'
      ],
      logo: '{{$logo}}'
    }
  </script>
  <div id="app"></div>
  {!! $theme_config['custom_html'] !!}
</body>

</html>