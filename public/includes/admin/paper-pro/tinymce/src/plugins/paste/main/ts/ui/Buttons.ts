/**
 * Buttons.js
 *
 * Released under LGPL License.
 * Copyright (c) 1999-2017 Ephox Corp. All rights reserved
 *
 * License: http://www.tinymce.com/license
 * Contributing: http://www.tinymce.com/contributing
 */

import { Fun } from '@ephox/katamari';

const stateChange = function (editor, clipboard, e) {
  const ctrl = e.control;

  ctrl.active(clipboard.pasteFormat === 'text');

  editor.on('PastePlainTextToggle', function (e) {
    ctrl.active(e.state);
  });
};

const register = function (editor, clipboard) {
  const postRender = Fun.curry(stateChange, editor, clipboard);

  editor.addButton('pastetext', {
    active: false,
    icon: 'pastetext',
    tooltip: 'Paste as text',
    cmd: 'mceTogglePlainTextPaste',
    onPostRender: postRender
  });

  editor.addMenuItem('pastetext', {
    text: 'Paste as text',
    selectable: true,
    active: clipboard.pasteFormat,
    cmd: 'mceTogglePlainTextPaste',
    onPostRender: postRender
  });
};

export default {
  register
};