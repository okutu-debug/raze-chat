import defaultAttributes from '../defaultAttributes';
import type { IconNode } from '../types';

const AlignHorizontalSpaceBetween: IconNode = [
  'svg',
  defaultAttributes,
  [
    ['rect', { width: '6', height: '14', x: '3', y: '5', rx: '2' }],
    ['rect', { width: '6', height: '10', x: '15', y: '7', rx: '2' }],
    ['path', { d: 'M3 2v20' }],
    ['path', { d: 'M21 2v20' }],
  ],
];

export default AlignHorizontalSpaceBetween;
