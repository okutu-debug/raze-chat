import defaultAttributes from '../defaultAttributes';
import type { IconNode } from '../types';

const AlignVerticalSpaceBetween: IconNode = [
  'svg',
  defaultAttributes,
  [
    ['rect', { width: '14', height: '6', x: '5', y: '15', rx: '2' }],
    ['rect', { width: '10', height: '6', x: '7', y: '3', rx: '2' }],
    ['path', { d: 'M2 21h20' }],
    ['path', { d: 'M2 3h20' }],
  ],
];

export default AlignVerticalSpaceBetween;
