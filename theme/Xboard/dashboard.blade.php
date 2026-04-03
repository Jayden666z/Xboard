<!doctype html>
<html lang="zh-CN">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
  <title>{{$title}}</title>
  <script type="module" crossorigin src="/theme/{{$theme}}/assets/umi.js"></script>
  <style>
    /* ===== 简约登录页全局重置 ===== */
    * { box-sizing: border-box; }

    /* 登录页背景：纯净白色，去掉原有背景图 */
    body {
      margin: 0;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
      background: #f5f5f7 !important;
    }

    /* 隐藏原有背景图层 */
    #app > div > div[style*="background"] {
      background-image: none !important;
      background-color: #f5f5f7 !important;
    }

    /* 登录容器居中 */
    .passport,
    [class*="passport"],
    [class*="login"] {
      display: flex !important;
      align-items: center !important;
      justify-content: center !important;
      min-height: 100vh !important;
      background: #f5f5f7 !important;
      background-image: none !important;
    }

    /* 登录卡片：简约白卡片 */
    .passport .n-card,
    [class*="passport"] .n-card,
    [class*="login"] .n-card,
    .n-card[class*="login"],
    .wrapper .n-card {
      width: 380px !important;
      max-width: 90vw !important;
      border-radius: 16px !important;
      border: none !important;
      box-shadow: 0 2px 24px rgba(0, 0, 0, 0.08) !important;
      padding: 8px !important;
      background: #ffffff !important;
    }

    /* 卡片头部 */
    .n-card-header {
      padding: 28px 28px 0 28px !important;
      font-size: 22px !important;
      font-weight: 600 !important;
      color: #1a1a1a !important;
      letter-spacing: -0.3px !important;
    }

    .n-card-header__main {
      font-size: 22px !important;
      font-weight: 600 !important;
    }

    /* 卡片内容区 */
    .n-card__content {
      padding: 20px 28px 28px 28px !important;
    }

    /* 输入框简约化 */
    .n-input {
      border-radius: 10px !important;
      background: #f8f8f8 !important;
      border: 1.5px solid transparent !important;
      transition: border-color 0.2s ease, background 0.2s ease !important;
    }

    .n-input:hover {
      background: #f0f0f0 !important;
    }

    .n-input--focus,
    .n-input:focus-within {
      border-color: #333 !important;
      background: #fff !important;
      box-shadow: none !important;
    }

    .n-input .n-input__input-el {
      font-size: 14px !important;
      color: #1a1a1a !important;
    }

    .n-input .n-input__placeholder {
      color: #aaa !important;
    }

    /* 表单间距 */
    .n-form-item {
      margin-bottom: 14px !important;
    }

    .n-form-item-label {
      font-size: 13px !important;
      font-weight: 500 !important;
      color: #555 !important;
      padding-bottom: 6px !important;
    }

    /* 主按钮：深色简约风 */
    .n-button--primary-type {
      background: #1a1a1a !important;
      border-color: #1a1a1a !important;
      border-radius: 10px !important;
      height: 42px !important;
      font-size: 14px !important;
      font-weight: 500 !important;
      letter-spacing: 0.3px !important;
      transition: opacity 0.2s ease !important;
      box-shadow: none !important;
    }

    .n-button--primary-type:hover {
      opacity: 0.82 !important;
      background: #1a1a1a !important;
    }

    /* 次要按钮 */
    .n-button:not(.n-button--primary-type) {
      border-radius: 10px !important;
      font-size: 13px !important;
      color: #555 !important;
      border-color: #e0e0e0 !important;
    }

    /* Tab 切换（登录/注册） */
    .n-tabs .n-tabs-tab {
      font-size: 14px !important;
      font-weight: 500 !important;
      color: #999 !important;
      padding: 8px 0 !important;
    }

    .n-tabs .n-tabs-tab--active {
      color: #1a1a1a !important;
      font-weight: 600 !important;
    }

    .n-tabs .n-tabs-bar {
      background: #1a1a1a !important;
      height: 2px !important;
      border-radius: 2px !important;
    }

    /* 分割线 */
    .n-divider {
      border-color: #f0f0f0 !important;
    }

    /* 链接文字 */
    .n-a, a {
      color: #555 !important;
      text-decoration: none !important;
    }

    .n-a:hover, a:hover {
      color: #1a1a1a !important;
    }

    /* Logo 区域 */
    img[class*="logo"],
    [class*="logo"] img {
      filter: none !important;
      opacity: 0.9 !important;
    }

    /* 移动端适配 */
    @media (max-width: 480px) {
      .n-card {
        border-radius: 12px !important;
        margin: 16px !important;
      }
      .n-card-header {
        padding: 20px 20px 0 20px !important;
      }
      .n-card__content {
        padding: 16px 20px 20px 20px !important;
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