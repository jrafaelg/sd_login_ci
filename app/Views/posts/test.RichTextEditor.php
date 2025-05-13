<div class="col-12">
    <div class="form-floating mb-4">
        <textarea id="contend3" name="contend3" rows="10" cols="500" placeholder="Contend"
            class="form-control
                                <?= !empty(session()->getFlashdata('errors')['contend']) ? 'is-invalid' : '';
                                ?>"
            style="height: 200px;"><?= set_value('contend') ?? ''; ?></textarea>

        <span class="invalid-feedback"><?= session()->getFlashdata('errors')['contend'] ?? '' ?></span>
    </div>
</div>

<script>
    var editor1cfg = {}
    editor1cfg.toolbar = "default";
    editor1cfg.fontAwesome = true;
    editor1cfg.toolbar = "mytoolbar";
    editor1cfg.toolbar_mytoolbar = "{bold,italic}|{justifyleft,justifycenter,justifyright,justifyfull}|{fontname,fontsize}|removeformat" +
        "#{undo,redo,fullscreenenter,fullscreenexit,togglemore}";
    //"{paragraphformat,align}|{insertlink,insertimage}|{undo,redo,fullscreenenter,fullscreenexit,togglemore}";
    //editor1cfg.toolbarButtons = "bold,italic,fontname,fontsize,forecolor,backcolor,removeformat," +
    editor1cfg.maxHTMLLength = "5000";
    editor1cfg.editorResizeMode = "height";
    var editor1 = new RichTextEditor("#contend3", editor1cfg);
</script>