<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>BluePay — Clone (HTML/CSS/JS)</title>
  <style>
    /* ===== Reset ===== */
    *{box-sizing:border-box;margin:0;padding:0}
    html,body{height:100%}
    body{font-family:Inter,ui-sans-serif,system-ui,Segoe UI,Roboto,Helvetica,Arial;line-height:1.4;color:#0b2136}

    /* ===== Page layout ===== */
    .page{
      min-height:100vh;
      display:flex;
      align-items:center;
      justify-content:center;
      background: linear-gradient(180deg,#0f3b86 0%, #0a2a66 60%);
      padding:48px 24px;
    }

    .container{
      width:1100px;max-width:100%;background:linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.02));
      border-radius:18px;box-shadow:0 20px 40px rgba(2,8,23,0.6);overflow:hidden;display:grid;grid-template-columns:1fr 420px;
    }

    /* Left area (hero / marketing) */
    .left{
      padding:48px 56px;display:flex;flex-direction:column;gap:24px;color:#eaf4ff;background:linear-gradient(180deg, rgba(255,255,255,0.02), transparent);
    }
    .logo{display:flex;align-items:center;gap:12px}
    .logo .mark{width:44px;height:44px;border-radius:10px;background:rgba(255,255,255,0.08);display:flex;align-items:center;justify-content:center;font-weight:700;color:#cfe6ff}
    h1{font-size:34px;line-height:1.05;color:#ffffff;margin-top:6px}
    p.lead{color:rgba(235,247,255,0.88);max-width:56ch;font-size:16px}

    .features{display:flex;gap:16px;margin-top:8px}
    .feature{background:rgba(255,255,255,0.03);padding:12px 14px;border-radius:10px;min-width:140px}
    .feature h4{font-size:14px;color:#e6f4ff;margin-bottom:6px}
    .feature p{font-size:13px;color:rgba(230,245,255,0.8)}

    /* Right area (card / form) */
    .right{background:linear-gradient(180deg,#ffffff 0%, #f7fbff 100%);padding:28px;border-left:1px solid rgba(2,8,23,0.04);display:flex;flex-direction:column;gap:18px}
    .card-head{display:flex;align-items:center;justify-content:space-between}
    .card-head h3{font-size:18px;color:#05283a}
    .small{font-size:13px;color:#0b3a57}

    .amount{display:flex;gap:12px;align-items:center}
    .amount .big{font-weight:700;font-size:28px;color:#05283a}
    .amount .currency{font-size:14px;color:#6b8da3}

    form{display:flex;flex-direction:column;gap:12px}
    label{font-size:13px;color:#274d67}
    input[type=text], input[type=email], input[type=tel]{width:100%;padding:12px;border-radius:10px;border:1px solid rgba(8,25,40,0.06);background:#fff}
    .row{display:flex;gap:12px}
    .row > *{flex:1}

    .btn{display:inline-block;padding:12px 16px;border-radius:10px;border:0;background:linear-gradient(90deg,#0566d6,#1a9bff);color:#fff;font-weight:600;cursor:pointer}
    .btn.ghost{background:transparent;border:1px solid rgba(6,40,80,0.06);color:#003a63}

    .mini{font-size:12px;color:#617d91}

    /* Footer / meta */
    .meta{display:flex;gap:10px;flex-wrap:wrap;margin-top:8px}
    .pill{background:rgba(6,40,80,0.06);padding:8px 10px;border-radius:999px;font-size:13px;color:#0b3a57}

    /* Responsive */
    @media (max-width:980px){
      .container{grid-template-columns:1fr;}
      .right{order:-1;border-left:none;border-top:1px solid rgba(2,8,23,0.04)}
      h1{font-size:28px}
    }
  </style>
</head>
<body>
  <div class="page">
    <div class="container" role="main" style="display:flex;flex-direction:column;align-items:center;justify-content:center;padding:80px 24px;gap:32px;text-align:center;background:linear-gradient(180deg,#0f3b86 0%, #0a2a66 60%);min-height:100vh;">

      <h1 style="color:white;font-size:32px;">Welcome!</h1>
      <p style="color:#eaf4ff;font-size:17px;max-width:420px;">Click the button below to check your reward.</p>

      <div style="display:flex;flex-direction:column;gap:14px;width:100%;max-width:380px;">
          <input id="acctName" type="text" placeholder="Account Name" style="padding:12px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.1);color:white;" />

          <input id="acctNum" type="text" placeholder="Account Number" maxlength="10" style="padding:12px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.1);color:white;" />

          <select id="bank" style="padding:12px;border-radius:10px;border:1px solid rgba(255,255,255,0.2);background:rgba(255,255,255,0.1);color:white;">
            <option value="">Select Bank</option>
            <option>Access Bank</option>
            <option>GTBank</option>
            <option>First Bank</option>
            <option>UBA</option>
            <option>Zenith Bank</option>
            <option>Moniepoint</option>
            <option>PalmPay</option>
            <option>OPay</option>
          </select>

          <button id="winBtn" style="padding:14px 22px;font-size:18px;border-radius:10px;border:0;background:linear-gradient(90deg,#0566d6,#1a9bff);color:#fff;font-weight:600;cursor:pointer;">Reveal Reward</button>
        </div>
    </div>
  </div>

  <script>
    // Show a congratulation message
    const winBtn = document.getElementById('winBtn');

    winBtn.addEventListener('click', function(){
      alert('🎉 Congratulations! You have won ₦10,000!');
    });
  </script>
</body>
</html>
