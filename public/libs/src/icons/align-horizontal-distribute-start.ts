import defaultAttributes from '../defaultAttributes';
import type { IconNode } from '../types';

const AlignHorizontalDistributeStart: IconNode = [
  'svg',
  defaultAttributes,
  [
    ['rect', { width: '6', height: '14', x: '4', y: '5', rx: '2' }],
    ['rect', { width: '6', height: '10', x: '14', y: '7', rx: '2' }],
    ['path', { d: 'M4 2v20' }],
    ['path', { d: 'M14 2v20' }],
  ],
];

export default AlignHorizontalDistributeStart;
