<?php if(session()->has('NoticeSuccess')): ?>
    <script>
        alert("<?php echo e(session('NoticeSuccess')); ?>");
    </script>
<?php endif; ?>
<section class="panel">
    <header class="panel-heading">
        Form Elements
    </header>
    <div class="panel-body">
        <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <?php if(isset($thong_tin_san_pham)): ?>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Mã SKU</label>
                    <div class="col-sm-4">
                        <input type="text" name="sku" class="form-control"
                            value="<?php echo e($thong_tin_san_pham->sku); ?>">
                        <span class="help-block"></span>
                    </div>
                    <label class="col-sm-2 control-label" class="form-control">Loại sách</label>
                    <div class="col-sm-4">
                        <select name="id_san_pham" id="" class="form-control">
                            <?php $__currentLoopData = $ds_san_pham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $san_pham): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($san_pham->id); ?>"
                                    <?php if($thong_tin_san_pham->id_san_pham == $san_pham->id): ?> selected="selected" <?php endif; ?>>
                                    <?php echo e($san_pham->ten_san_pham); ?>

                                </option>
                                <?php if(count($san_pham->ds_loai_con) > 0): ?>
                                    <?php $__currentLoopData = $san_pham->ds_loai_con; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loai_con): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($loai_con->id); ?>"
                                            <?php if($thong_tin_san_pham->id_san_pham == $loai_con->id): ?> selected="selected" <?php endif; ?>>
                                            |== <?php echo e($loai_con->ten_san_pham); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tên sách</label>
                    <div class="col-sm-4">
                        <input name="ten_sach" value="<?php echo e($thong_tin_san_pham->ten_san_pham); ?>" type="text"
                            class="form-control">
                        
                    </div>
                    <label class="col-sm-2 control-label">Đọc thử</label>
                    <div class="col-sm-4">
                        <input name="doc_thu" type="text" value="<?php echo e($thong_tin_san_pham->doc_thu); ?>"
                            class="form-control">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Số trang:</label>
                    <div class="col-sm-4">
                        <input name="so_trang" value="<?php echo e($thong_tin_san_pham->so_trang); ?>" type="text"
                            class="form-control">
                        
                    </div>
                    <label class="col-sm-2 control-label">Tác giả:</label>
                    <div class="col-sm-4">
                        <select name="id_tac_gia" id="" class="form-control">
                            <?php $__currentLoopData = $ds_ncc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($tac_gia->id); ?>"
                                    <?php if($thong_tin_san_pham->id_nha_cung_cap == $ncc->id): ?> selected="selected" <?php endif; ?>>
                                    <?php echo e($tac_gia->ten_tac_gia); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nhà xuất bản:</label>
                    <div class="col-sm-4">
                        <select name="id_nha_xuat_ban" id="" class="form-control">
                            <?php $__currentLoopData = $ds_nxb; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nxb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($nxb->id); ?>"
                                    <?php if($thong_tin_san_pham->id_nha_xuat_ban == $nxb->id): ?> selected="selected" <?php endif; ?>>
                                    <?php echo e($nxb->ten_nha_xuat_ban); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                    </div>
                    <label class="col-sm-2 control-label">Ngày xuất bản</label>
                    <div class="col-sm-4">
                        <input name="ngay_xuat_ban" value="<?php echo e($thong_tin_san_pham->ngay_xuat_ban); ?>" type="date"
                            class="form-control">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Trọng lượng:</label>
                    <div class="col-sm-4">
                        <input name="trong_luong" type="text" value="<?php echo e($thong_tin_san_pham->trong_luong); ?>"
                            class="form-control">
                        
                    </div>
                    <label class="col-sm-2 control-label">Kích thước</label>
                    <div class="col-sm-4">
                        <input name="kich_thuoc" type="text" value="<?php echo e($thong_tin_san_pham->kich_thuoc); ?>"
                            class="form-control">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Giá bìa</label>
                    <div class="col-sm-4">
                        <input name="gia_bia" type="text" class="form-control"
                            value="<?php echo e($thong_tin_san_pham->gia_bia); ?>">
                        
                    </div>
                    <label class="col-sm-2 control-label">Đơn giá</label>
                    <div class="col-sm-4">
                        <input name="don_gia" type="text" class="form-control"
                            value="<?php echo e($thong_tin_san_pham->don_gia); ?>">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Trạng thái</label>
                    <div class="col-sm-4">
                        <select name="trang_thai" id="" class="form-control">
                            <option value="1" <?php if($thong_tin_san_pham->trang_thai == 1): ?> selected="true" <?php endif; ?>>
                                Đang bán
                            </option>
                            <option value="0" <?php if($thong_tin_san_pham->trang_thai == 0): ?> selected="true" <?php endif; ?>>
                                Ẩn đi
                            </option>
                        </select>
                        
                    </div>
                    <label class="col-sm-2 control-label">Nổi bật</label>
                    <div class="col-sm-4">
                        <select name="noi_bat" id="" class="form-control">
                            <option value="0" <?php if($thong_tin_san_pham->noi_bat == 0): ?> selected="true" <?php endif; ?>>
                                Không nổi bật
                            </option>
                            <option value="1" <?php if($thong_tin_san_pham->noi_bat == 1): ?> selected="true" <?php endif; ?>>
                                Nổi bật
                            </option>
                        </select>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Giới thiệu</label>
                    <div class="col-sm-4">
                        <textarea class="form-control ckeditor" name="editor1" rows="6"><?php echo e($thong_tin_san_pham->gioi_thieu); ?></textarea>
                    </div>
                    <script>
                        function InsertHTML() {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            var value = document.getElementById('htmlArea').value;
                            // Check the active editing mode.
                            if (editor.mode == 'wysiwyg') {
                                // Insert HTML code.
                                // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertHtml
                                editor.insertHtml(value);
                            } else
                                alert('You must be in WYSIWYG mode!');
                        }
                        function InsertText() {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            var value = document.getElementById('txtArea').value;
                            // Check the active editing mode.
                            if (editor.mode == 'wysiwyg') {
                                // Insert as plain text.
                                // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertText
                                editor.insertText(value);
                            } else
                                alert('You must be in WYSIWYG mode!');
                        }
                        function SetContents() {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            var value = document.getElementById('htmlArea').value;
                            // Set editor contents (replace current contents).
                            // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setData
                            editor.setData(value);
                        }
                        function GetContents() {
                            // Get the editor instance that you want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            // Get editor contents
                            // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getData
                            alert(editor.getData());
                        }
                        function ExecuteCommand(commandName) {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            // Check the active editing mode.
                            if (editor.mode == 'wysiwyg') {
                                // Execute the command.
                                // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-execCommand
                                editor.execCommand(commandName);
                            } else
                                alert('You must be in WYSIWYG mode!');
                        }
                        function CheckDirty() {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            // Checks whether the current editor contents present changes when compared
                            // to the contents loaded into the editor at startup
                            // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-checkDirty
                            alert(editor.checkDirty());
                        }
                        function ResetDirty() {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            // Resets the "dirty state" of the editor (see CheckDirty())
                            // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-resetDirty
                            editor.resetDirty();
                            alert('The "IsDirty" status has been reset');
                        }
                        function Focus() {
                            CKEDITOR.instances.editor1.focus();
                        }
                        function onFocus() {
                            document.getElementById('eMessage').innerHTML = '<b>' + this.name + ' is focused </b>';
                        }
                        function onBlur() {
                            document.getElementById('eMessage').innerHTML = this.name + ' lost focus';
                        }
                        // Replace the <textarea id="editor1"> with an CKEditor instance.
                        $(() => {
                            CKEDITOR.replace('editor1', {
                                on: {
                                    focus: onFocus,
                                    blur: onBlur,
                                    // Check for availability of corresponding plugins.
                                    pluginsLoaded: function(evt) {
                                        var doc = CKEDITOR.document,
                                            ed = evt.editor;
                                        if (!ed.getCommand('bold'))
                                            doc.getById('exec-bold').hide();
                                        if (!ed.getCommand('link'))
                                            doc.getById('exec-link').hide();
                                    }
                                }
                            });
                        })
                    </script>

                    <label class="col-sm-2 control-label">Hình sách</label>
                    <div class="col-sm-4">
                        <input type="file" name="hinh_sach" id="hinh_sach" class="form-control">
                        <input type="hidden" name="hinh" value="<?php echo e($thong_tin_sach->hinh); ?>">
                        <div id="image-holder">
                            <img src="/images/sach/<?php echo e($thong_tin_sach->hinh); ?>" alt="thumb-image">
                        </div>
                        
                        <script>
                            $("#hinh_sach").on('change', function() {
                                if (typeof(FileReader) != "undefined") {
                                    var image_holder = $("#image-holder");
                                    image_holder.empty();
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $("<img />", {
                                            "src": e.target.result,
                                            "class": "thumb-image"
                                        }).appendTo(image_holder);
                                    }
                                    image_holder.show();
                                    reader.readAsDataURL($(this)[0].files[0]);
                                } else {
                                    alert("This browser does not support FileReader.");
                                }
                            });
                        </script>
                    </div>
                </div>
            <?php else: ?>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Mã SKU</label>
                    <div class="col-sm-4">
                        <input type="text" name="sku" class="form-control">
                        <span class="help-block"></span>
                    </div>
                    <label class="col-sm-2 control-label" class="form-control">Loại sách</label>
                    <div class="col-sm-4">
                        <select name="id_san_pham" id="" class="form-control">
                            <?php $__currentLoopData = $ds_san_pham; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $san_pham): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($san_pham->id); ?>">
                                    <?php echo e($san_pham->ten_san_pham); ?>

                                </option>
                                <?php if(count($san_pham->ds_loai_con) > 0): ?>
                                    <?php $__currentLoopData = $san_pham->ds_loai_con; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loai_con): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($loai_con->id); ?>">
                                            |== <?php echo e($loai_con->ten_san_pham); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Tên sách</label>
                    <div class="col-sm-4">
                        <input name="ten_sach" type="text" class="form-control">
                        
                    </div>
                    <label class="col-sm-2 control-label">Đọc thử</label>
                    <div class="col-sm-4">
                        <input name="doc_thu" type="text" class="form-control">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Số trang:</label>
                    <div class="col-sm-4">
                        <input name="so_trang" type="text" class="form-control">
                        
                    </div>
                    <label class="col-sm-2 control-label">Tác giả:</label>
                    <div class="col-sm-4">
                        <select name="id_tac_gia" id="" class="form-control">
                            <?php $__currentLoopData = $ds_ncc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ncc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($ncc->id); ?>">
                                    <?php echo e($ncc->ten_ncc); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Nhà xuất bản:</label>
                    <div class="col-sm-4">
                        <select name="id_nha_xuat_ban" id="" class="form-control">
                            <?php $__currentLoopData = $ds_nsx; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nsx): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($nsx->id); ?>">
                                    <?php echo e($nsx->ten_nha_san_xuat); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        
                    </div>
                    <label class="col-sm-2 control-label">Ngày xuất bản</label>
                    <div class="col-sm-4">
                        <input name="ngay_xuat_ban" type="date" class="form-control">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Trọng lượng:</label>
                    <div class="col-sm-4">
                        <input name="trong_luong" type="text" class="form-control">
                        
                    </div>
                    <label class="col-sm-2 control-label">Kích thước</label>
                    <div class="col-sm-4">
                        <input name="kich_thuoc" type="text" class="form-control">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Giá bìa</label>
                    <div class="col-sm-4">
                        <input name="gia_bia" type="text" class="form-control">
                        
                    </div>
                    <label class="col-sm-2 control-label">Đơn giá</label>
                    <div class="col-sm-4">
                        <input name="don_gia" type="text" class="form-control">
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Trạng thái</label>
                    <div class="col-sm-4">
                        <select name="trang_thai" id="" class="form-control">
                            <option value="1">
                                Đang bán
                            </option>
                            <option value="0">
                                Ẩn đi
                            </option>
                        </select>
                        
                    </div>
                    <label class="col-sm-2 control-label">Nổi bật</label>
                    <div class="col-sm-4">
                        <select name="noi_bat" id="" class="form-control">
                            <option value="0">
                                Không nổi bật
                            </option>
                            <option value="1">
                                Nổi bật
                            </option>
                        </select>
                        
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Giới thiệu</label>
                    <div class="col-sm-4">
                        <textarea class="form-control ckeditor" name="editor1" rows="6"></textarea>
                    </div>
                    <script>
                        function InsertHTML() {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            var value = document.getElementById('htmlArea').value;
                            // Check the active editing mode.
                            if (editor.mode == 'wysiwyg') {
                                // Insert HTML code.
                                // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertHtml
                                editor.insertHtml(value);
                            } else
                                alert('You must be in WYSIWYG mode!');
                        }
                        function InsertText() {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            var value = document.getElementById('txtArea').value;
                            // Check the active editing mode.
                            if (editor.mode == 'wysiwyg') {
                                // Insert as plain text.
                                // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertText
                                editor.insertText(value);
                            } else
                                alert('You must be in WYSIWYG mode!');
                        }
                        function SetContents() {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            var value = document.getElementById('htmlArea').value;
                            // Set editor contents (replace current contents).
                            // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setData
                            editor.setData(value);
                        }
                        function GetContents() {
                            // Get the editor instance that you want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            // Get editor contents
                            // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getData
                            alert(editor.getData());
                        }
                        function ExecuteCommand(commandName) {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            // Check the active editing mode.
                            if (editor.mode == 'wysiwyg') {
                                // Execute the command.
                                // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-execCommand
                                editor.execCommand(commandName);
                            } else
                                alert('You must be in WYSIWYG mode!');
                        }
                        function CheckDirty() {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            // Checks whether the current editor contents present changes when compared
                            // to the contents loaded into the editor at startup
                            // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-checkDirty
                            alert(editor.checkDirty());
                        }
                        function ResetDirty() {
                            // Get the editor instance that we want to interact with.
                            var editor = CKEDITOR.instances.editor1;
                            // Resets the "dirty state" of the editor (see CheckDirty())
                            // http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-resetDirty
                            editor.resetDirty();
                            alert('The "IsDirty" status has been reset');
                        }
                        function Focus() {
                            CKEDITOR.instances.editor1.focus();
                        }
                        function onFocus() {
                            document.getElementById('eMessage').innerHTML = '<b>' + this.name + ' is focused </b>';
                        }
                        function onBlur() {
                            document.getElementById('eMessage').innerHTML = this.name + ' lost focus';
                        }
                        // Replace the <textarea id="editor1"> with an CKEditor instance.
                        $(() => {
                            CKEDITOR.replace('editor1', {
                                on: {
                                    focus: onFocus,
                                    blur: onBlur,
                                    // Check for availability of corresponding plugins.
                                    pluginsLoaded: function(evt) {
                                        var doc = CKEDITOR.document,
                                            ed = evt.editor;
                                        if (!ed.getCommand('bold'))
                                            doc.getById('exec-bold').hide();
                                        if (!ed.getCommand('link'))
                                            doc.getById('exec-link').hide();
                                    }
                                }
                            });
                        })
                    </script>

                    <label class="col-sm-2 control-label">Hình sách</label>
                    <div class="col-sm-4">
                        <input type="file" name="hinh_sach" id="hinh_sach" class="form-control">
                        <div id="image-holder">
                            <img src="" alt="thumb-image">
                        </div>
                        
                        <script>
                            $("#hinh_sach").on('change', function() {
                                if (typeof(FileReader) != "undefined") {
                                    var image_holder = $("#image-holder");
                                    image_holder.empty();
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        $("<img />", {
                                            "src": e.target.result,
                                            "class": "thumb-image"
                                        }).appendTo(image_holder);
                                    }
                                    image_holder.show();
                                    reader.readAsDataURL($(this)[0].files[0]);
                                } else {
                                    alert("This browser does not support FileReader.");
                                }
                            });
                        </script>
                    </div>
                </div>

            <?php endif; ?>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-primary">Lưu thông tin sách</button>
                </div>
            </div>
        </form>
    </div>
</section>
<?php /**PATH C:\wamp64\www\website_PSPORTN\do_an-app\resources\views/page_admin/mod_them_san_pham.blade.php ENDPATH**/ ?>