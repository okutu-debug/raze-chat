import defaultAttributes from '../defaultAttributes';
import type { IconNode } from '../types';

const AppWindow: IconNode = [
  'svg',
  defaultAttributes,
  [
    ['rect', { x: '2', y: '4', width: '20', height: '16', rx: '2' }],
    ['path', { d: 'M10 4v4' }],
    ['path', { d: 'M2 8h20' }],
    ['path', { d: 'M6 4v4' }],
  ],
];

export default AppWindow;
