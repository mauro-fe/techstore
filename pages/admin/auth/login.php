<style>
    body {
        margin: 0;
        padding: 0;
    }
</style>
<?= password_hash('83948215', PASSWORD_DEFAULT);
?>
<main
    style="min-height:100vh;display:grid;place-items:center;background:linear-gradient(135deg, rgba(18,69,62,1) 0%, #0f2220 100%);padding:24px;">
    <div
        style="width:100%;max-width:420px;background:#0F1418;border:1px solid #1e2a2a;border-radius:16px;box-shadow:0 10px 35px rgba(0,0,0,.25);">
        <div style="padding:24px 24px 8px 24px;text-align:center">
            <div style="font-weight:700;font-size:22px;color:#E5F7F3;letter-spacing:.3px">
                <?= htmlspecialchars($lojaNome) ?>
            </div>
            <div style="color:#9fb8b4;margin-top:6px">Acesso ao Painel</div>
        </div>

        <?php if (!empty($error)): ?>
            <div
                style="margin:12px 20px 0;background:#2b1515;color:#ffb3b3;border:1px solid #5a2323;border-radius:10px;padding:10px 12px;">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>
        <?php if (!empty($success)): ?>
            <div
                style="margin:12px 20px 0;background:#14301f;color:#b6f1cb;border:1px solid #295f42;border-radius:10px;padding:10px 12px;">
                <?= htmlspecialchars($success) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="<?= base_url('login') ?>" style="padding:18px 20px 22px 20px;">
            <?= csrf_input() ?>
            <div style="display:grid;gap:12px">
                <label style="color:#cfe7e2;font-size:13px">
                    E-mail
                    <input type="email" name="email" required autocomplete="username"
                        style="margin-top:6px;width:100%;padding:12px 14px;border-radius:10px;border:1px solid #2a3a39;background:#0b1113;color:#dff6f0;outline:none">
                </label>

                <label style="color:#cfe7e2;font-size:13px">
                    Senha
                    <input type="password" name="senha" required autocomplete="current-password"
                        style="margin-top:6px;width:100%;padding:12px 14px;border-radius:10px;border:1px solid #2a3a39;background:#0b1113;color:#dff6f0;outline:none">
                </label>

                <button type="submit"
                    style="margin-top:10px;width:100%;padding:12px 14px;border-radius:10px;border:0;background:#17c088;color:#001410;font-weight:700;letter-spacing:.3px;cursor:pointer;transition:.2s">
                    Entrar
                </button>
            </div>
        </form>

        <div style="padding:0 20px 20px 20px;color:#88a8a3;font-size:12px;text-align:center;">
            Após logar, você será redirecionado para <b><?= htmlspecialchars(base_url('admin')) ?></b>.
        </div>
    </div>
</main>