import defaultAttributes from '../defaultAttributes';
import type { IconNode } from '../types';

const AlignHorizontalSpaceAround: IconNode = [
  'svg',
  defaultAttributes,
  [
    ['rect', { width: '6', height: '10', x: '9', y: '7', rx: '2' }],
    ['path', { d: 'M4 22V2' }],
    ['path', { d: 'M20 22V2' }],
  ],
];

export default AlignHorizontalSpaceAround;
